import java.util.Random;
public class Shared{
    private static int x ;

    public Shared(){
        Random rand = new Random();
        x = rand.nextInt(11);
    }

    public synchronized void set(int value){
        x = value;

    }

    public synchronized int get(){
        return x;
    }

    public synchronized void  waitShared() throws InterruptedException{
        wait();
    }

    public synchronized void notifyAllShared(){
        notifyAll();
    }
}
