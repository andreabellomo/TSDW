public class Main{
    public static void main(String args[]){

        Container c = new Container();
        Producer p = new Producer(c);
        Consumer c1 = new Consumer("c1",c);
        Consumer c2 = new Consumer("c2",c);

        p.start();
        c1.start();
        c2.start();


    }
}