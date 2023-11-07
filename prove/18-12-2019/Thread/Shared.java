import java.util.Random;

public class Shared{
    private int x = 0;
    Random rand = new Random();

    public Shared(){
        this.x = rand.nextInt(11);
    }

    public int getShared (){
        return x;
    }

    public synchronized void setShared(int value){
        x = value;
    }

    public synchronized void waitShared() throws InterruptedException{
        wait();
    }

    public synchronized void notifYShared() {
        notifyAll();
    }

}