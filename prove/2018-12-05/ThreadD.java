import java.util.Random;

public class ThreadD extends Thread{

    private String name;
    private Shared shared;

    public ThreadD (String name , Shared shared){
        this.name = name ;
        this.shared = shared;
    }

    public void run(){

        while(true){

            try{
                sleep(300);
            }catch (InterruptedException e){}
            
            int m = shared.getShared();

            if ((m%2) != 0 ) {
                System.out.println("TP : IL VALORE DI m è ->" + m );
                Random rand = new Random();
                int value = rand.nextInt();
                shared.setShared(value);

                shared.notifyAll();
            }else {
                
                try{
                    shared.wait();
                }catch (InterruptedException e){}
                    

            }
        }
    }



}