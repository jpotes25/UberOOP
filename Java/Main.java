
package Java;
class Main 
{
    public static void main(String[] args) 
    {
        Driver driver = new Driver("David Potes", "1006116326");
        UberX uberX = new UberX("VRC81D", driver, "Chevrolet", "Camaro RS");

        uberX.printDataCar();

    }
    
}