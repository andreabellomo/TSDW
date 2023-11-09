import java.io.*;
import java.net.*;

public class Client{
    public static void main(String args[]){

        InetAddress add = null;

        try{

            if(args.length == 0) {
                add = InetAddress.getByName(null);

            }else{
                 add = InetAddress.getByName(args[0]);
            }

        }catch(UnknownHostException e ){
            e.printStackTrace();
            return;
        }


        Socket client = null;
        BufferedReader in = null;
        BufferedReader stdin = null;
        PrintWriter out = null;

        try{

            client = new Socket(add,ServerC.PORT);
            in  = new BufferedReader(new InputStreamReader(client.getInputStream()));
            stdin = new BufferedReader(new InputStreamReader(System.in));
            out = new PrintWriter(client.getOutputStream(),true);

            String line ="";

            line = stdin.readLine();
            out.println(line);
            String response = in.readLine();
            System.out.println(response);
            

        }catch(IOException e ){
            e.printStackTrace();
            
        }


        try{
            client.close();
            in.close();
            out.close();


        }catch(IOException e ){
            e.printStackTrace();
            
        }

    }
}