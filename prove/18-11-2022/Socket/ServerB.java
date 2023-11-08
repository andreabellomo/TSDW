import java.io.*;
import java.net.*;

public class ServerB{

    public static final int PORT = 3333;

    public static void main(String args[]){

        ServerSocket server = null;

        try{
            server = new ServerSocket(PORT);
        }catch(IOException e ) {
            e.printStackTrace();
        }

        while(true){

            Socket client = null;
            BufferedReader in = null;
            PrintWriter out = null;
            

            try{
                client = server.accept();
                in = new BufferedReader (new InputStreamReader(client.getInputStream()));
                out = new PrintWriter(client.getOutputStream(),true);
           
                String line = in.readLine();
                System.out.println(line);
                out.println(line);

                try{
                    client.close();
                    in.close();
                }catch(IOException e){
                    e.printStackTrace();
                }


            }catch(IOException e){
                e.printStackTrace();
            }


         }
    }
}