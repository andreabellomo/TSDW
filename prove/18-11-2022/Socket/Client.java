import java.io.*;
import java.net.*;


public class Client{
    public static void main(String args[]){

        InetAddress add ;
        
        try{
            if (args.length == 0){
                add = InetAddress.getByName(null);
            }else {
                add = InetAddress.getByName(args[0]);
            }
        }catch(UnknownHostException e ){
            System.out.println("host non conosciuto");
            return;
        }

        BufferedReader in,stdin = null;
        PrintWriter out = null;
        Socket client = null;

        try{
            client = new Socket(add,ServerC.PORT);
            in = new BufferedReader(new InputStreamReader(client.getInputStream()));
            stdin = new BufferedReader(new InputStreamReader(System.in));
            out = new PrintWriter(client.getOutputStream(),true);

            String line = stdin.readLine();
            out.println(line);
            String response = in.readLine();
            System.out.println(" il Server dice : " + response);
        }catch(IOException e){
            e.printStackTrace();
        }
    }
}