import java.io.*;
import java.net.*;

public class ServerB{

    
    final static int PORT = 3333;

    public static void main(String args[]){
        
        ServerSocket server = null;

        try{
            server = new ServerSocket(PORT);

        } catch (IOException e){
            e.printStackTrace();
        }

        BufferedReader in = null;
        PrintWriter out = null;
        Socket client = null;

        try{

            

            while(true){

                client = server.accept();
                in= new BufferedReader(new InputStreamReader(client.getInputStream()));
                out = new PrintWriter(client.getOutputStream(),true);

                String line ;

                while((line = in.readLine()) != null){
                    System.out.println(line);
                    out.println(line);
                }

            }


        }catch(IOException e){
            e.printStackTrace();
        }

        try{
            client.close();
            in.close();

        }catch(IOException e){
            e.printStackTrace();
        }


    }
}