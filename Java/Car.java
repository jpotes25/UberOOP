package Java;

public class Car 
{
    // Atributes

    private Integer id;
    private String license;
    private Account driver;
    private Integer passengers;

    // Constructor

    public Car(String license, Account driver)
    {
        this.license = license;
        this.driver = driver;
    }

    // Getters & Setters

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

    // Methods

    void printDataCar()
    {
        System.out.println("License: " + license + " Driver Name: " + driver.getName());
    }    
}
