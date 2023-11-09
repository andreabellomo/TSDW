import java.io.*;
import java.net.*;

public class ServerC{

    
    final static int PORT = 3333;
    public static String str_max = "";

    public static String getLine(String line ){

        if(line.length() > str_max.length()){
            str_max = line;
        }

        return str_max;

    }

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
                    out.println(getLine(line));
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