import java.io.*;
import java.net.*;

public class EchoServer {


    public static final int port = 1050;
    public static final String secret = "mischief-managed";

    public static void main(String args[]) throws IOException{

        ServerSocket serverSocket = null;
        try{

            serverSocket = new ServerSocket(port);

        }catch(IOException e ){
            e.printStackTrace();
        }

        System.out.println("EchoServer started , socket :  + serverSocket");

        BufferedReader in = null;
        PrintWriter out = null;
        Socket clientSocket  = null;

        try{

            clientSocket = serverSocket.accept();
            System.out.println(" Connessione accettata: "+ clientSocket);

            in  = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
            out = new PrintWriter(clientSocket.getOutputStream(), true);
            

            String input_line;

            while((input_line = in.readLine() )!= null){

                if(input_line.equals(secret)) break;
                
                System.out.println("ripeto : " + input_line);
                out.println(input_line.toUpperCase());
            }

        

        } catch(IOException e){
            System.err.println("Accept failed");
            System.exit(1);

        } System.out.println("EchoServer: closing...");

        try {
            out.close();
            in.close();
            clientSocket.close();
            serverSocket.close();
        } catch (IOException e) {
            System.out.println("Errorclosing...");
            e.printStackTrace();
        }




        




    }
}
