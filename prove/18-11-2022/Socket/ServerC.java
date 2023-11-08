import java.io.*;
import java.net.*;

public class ServerC{

    public static final int PORT = 3333;

    public static boolean vocale(String str){
        switch(str.charAt(0)){
            case 'a':
            case 'e':
            case 'i':     
            case 'o':
            case 'u':
                return true;
            default: 
                return false;
        }
    }

    public static void main(String args[]){

        ServerSocket server = null;

        try{
            server = new ServerSocket(PORT);
            System.out.println("Server started");
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
                String last = "" ;

                if(vocale(line) == true){
                    last = line;
                }


                out.println(last);

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