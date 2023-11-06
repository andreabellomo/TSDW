import java.io.*;
import java.net.*;

public class Client1 {
    public static void main (String args[]){

        InetAddress add;

        try{
            if(args.length == 0) {
                add = InetAddress.getByName(null);
            }else{
                add = InetAddress.getByName(args[0]);
            }
        }catch(UnknownHostException e){
            System.out.println("erroe host non conosciuti : " + e.getMessage());
            return;
        }

    BufferedReader in, stdin = null ;
    PrintWriter out = null;
    Socket client = null;

    try{
        
        client = new Socket(add,Server_prova1.PORT);
        in = new BufferedReader(new InputStreamReader(client.getInputStream()));
        stdin =  new BufferedReader(new InputStreamReader(System.in));
        out = new PrintWriter(client.getOutputStream(),true);

        String line;

        while(true){
            line = stdin.readLine();
            out.println(line);

            String response = in.readLine();
            System.out.println(response);
        }
    
    }catch(IOException e){
            e.printStackTrace();
        }

    }

    

}


