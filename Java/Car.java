package Java;

public class Car 
{

    private Integer id;
    private String license;
    private Account driver;
    private Integer passengers;

    public Car(String license, Account driver)
    {
        this.license = license;
        this.driver = driver;
    }


    void printDataCar()
    {
        System.out.println("License: " + license + " Driver Name: " + driver.name);
    }


    public Integer getId() {
        return id;
    }


    public void setId(Integer id) {
        this.id = id;
    }


    public String getLicense() {
        return license;
    }


    public void setLicense(String license) {
        this.license = license;
    }


    public Account getDriver() {
        return driver;
    }


    public void setDriver(Account driver) {
        this.driver = driver;
    }


    public Integer getPassengers() {
        return passengers;
    }


    public void setPassengers(Integer passengers) {
        this.passengers = passengers;
    }

    
}
