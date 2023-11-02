import java.io.*;
import java.net.*;

public class ServerA{

    private static final int PORT = 7777;

    public static void main (String args[]) throws IOException{

        ServerSocket serverSocket = null ;

        try{
            serverSocket = new ServerSocket(PORT);

        }catch(IOException e ){
            e.printStackTrace();
        }

        Socket socket;
        BufferedReader in;
        //PrintWriter out;

        try{

            socket = serverSocket.accept();
            in = new BufferedReader (new InputStreamReader(socket.getInputStream()));
            //out = PrintWriter(socket.getOutputStream());

            String line = in.readLine();

            if(!line.matches("\\d+")){
                System.out.println("messaggio non valido ");
            }else {
                System.out.println(line);
            }

        }catch(IOException e){
                e.printStackTrace();
            }

    }
}