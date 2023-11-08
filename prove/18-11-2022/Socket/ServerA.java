import java.io.*;
import java.net.*;

public class ServerA{

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
            

            try{
                client = server.accept();
                in = new BufferedReader (new InputStreamReader(client.getInputStream()));
           
                String line = in.readLine();
                System.out.println(line);

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