import java.io.*;
import java.net.*;

public class ServerA{

    public static String history = "";

     public static String list(String s ){

            if (!s.equals("SHOW")) {
                history = history + (s + ";");
                return "OK";
            } else {
                return history;

            }

        }

    public static void main (String[] args) {

        try(ServerSocket serverSocket = new ServerSocket(3333)){

            while(true){

                Socket client_socket = serverSocket.accept();

                BufferedReader in = new BufferedReader(new InputStreamReader(client_socket.getInputStream()));

                PrintWriter out = new PrintWriter(client_socket.getOutputStream(),true);

                String input_line;

                while((input_line = in.readLine()) != null){
                    if(input_line == "") break;

                    System.out.println("Messaggio ricevuto e risposto: " + list(input_line));

                    out.println(list(input_line) + "\n"); 
            
                }

                client_socket.close();

            }
            

        }catch(IOException e ){
            e.printStackTrace();

        }

    }
}