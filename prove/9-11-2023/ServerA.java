import java.io.*;
import java.net.*;

public class ServerA{

    
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
                }

                try{
                    client.close();
                    in.close();
                    out.close();

                }catch (IOException e){
                    e.printStackTrace();
                }

            }


        }catch(IOException e){
            e.printStackTrace();
        }

    }
}