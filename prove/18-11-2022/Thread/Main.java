public class Main{
    public static void main(String args[]){

        Shared shared = new Shared();

        Player t1 = new Player(shared,"bellomo");
        Player t2 = new Player(shared,"gianni");
        Player t3 = new Player(shared,"pacchio");
        Player t4 = new Player(shared,"belen");

        t1.start();
        t2.start();
        t3.start();
        t4.start();
    }
}