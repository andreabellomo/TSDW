import java.util.Random;

public class Player extends Thread{

    private String name;
    Shared shared;

    public Player (Shared shared,String name){
        this.name = name;
        this.shared = shared;

    }

    public void run(){
        while(true){
            Random rand = new Random();
            int val = rand.nextInt(90);
            int old = shared.getValue();
            shared.setValue(val);
            System.out.println("Sono il thread " + name + " : sample valeva " + old + ", adesso vale : " + val );
            

            if (old ==  val){
                System.out.println("Sono il thread" + name + " ho finito." );
                return ;
            }
    }

    //System.out.println("valore finale di sample : "+  shared.getValue() );

}

    }
    