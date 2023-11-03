import java.io.*;
import java.net.*;

public class Client{
    public static void main(String args[]){

        InetAddress add ;

        try{
            if(args.length == 0 ){
                add = InetAddress.getByName(null);
            }else{
                add = InetAddress.getByName(args[0]);
            }
        }catch(UnknownHostException e ){
            System.out.println("host sconosciuto" + e.getMessage());
            return;
        }

        Socket client = null ;
        BufferedReader in ,stdin = null;
        PrintWriter out = null;

        try{

            client = new Socket(add, Server_prova1.PORT);
            in = new BufferedReader(new InputStreamReader(client.getInputStream()));
            out = new PrintWriter(client.getOutputStream(),true);
            stdin = new BufferedReader(new InputStreamReader(System.in));

            while(true){
                String input_line = stdin.readLine();
                out.println(input_line);

                String response = in.readLine();
                System.out.println("Server dice : " + response);
            }

        }catch(IOException e){
            e.printStackTrace();
        }



    }
}
