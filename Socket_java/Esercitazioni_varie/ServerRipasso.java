import java.util.*;
import java.net.*;
import java.io.*;

public class ServerRipasso{

    public static final int PORT = 3333;

    public static int cubo (String la){
        int l = Integer.parseInt(la);
        return l*l*l;
    }

    public static void main(String args[]){

        ServerSocket server = null;

        try{
            server = new ServerSocket(3333);

        }catch(IOException e){
            e.printStackTrace();
        }

        BufferedReader in  = null;
        Socket client = null;
        PrintWriter out = null;

        while(true){

            try{
                client = server.accept();
                in = new BufferedReader (new InputStreamReader(client.getInputStream()));
                out = new PrintWriter(client.getOutputStream(),true);

                String line = "";

                while((line = in.readLine()) != null){
                    if(line.matches("\\d+")){
                        out.println(cubo(line));
                        System.out.println(cubo(line));
                    }else{
                        out.println("input non valid");
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
}