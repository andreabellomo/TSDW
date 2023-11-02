import java.io.*;
import java.net.*;

public class ServerD{

    private static final int PORT = 7777;

    private static int MUL(String str){

        int somma = 0;
        for (int i = 0 ; i < str.length() ; i++){

            somma = somma + str.charAt(i);
        }
        return somma;
    }

    public static void main (String args[]) throws IOException{

        ServerSocket serverSocket = null ;

        try{
            serverSocket = new ServerSocket(PORT);

        }catch(IOException e ){
            e.printStackTrace();
        }

        Socket socket;
        BufferedReader in;
        PrintWriter out;

        try{

            socket = serverSocket.accept();
            in = new BufferedReader (new InputStreamReader(socket.getInputStream()));
            out = new  PrintWriter(socket.getOutputStream());
           

            String line = in.readLine();

            if(!line.matches("\\d+")){
                System.out.println("messaggio non valido ");
            }else {
                System.out.println(line);
                System.out.println("vita : " + MUL(line));
                out.println("ciao : " + MUL(line));
            }

        }catch(IOException e){
                e.printStackTrace();
            }

    }
}