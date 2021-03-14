package Java;

public class Card extends Payment
{
    //Atributes

    private int number;
    private int cvv;
    private String date;

    // Constructor

    public Card(int number, int cvv, String date)
    {
        this.number = number;
        this.cvv = cvv;
        this.date = date;       
    }

    //Getters & Setters

    public int getNumber() {
        return number;
    }

    public void setNumber(int number) {
        this.number = number;
    }

    public int getCvv() {
        return cvv;
    }

    public void setCvv(int cvv) {
        this.cvv = cvv;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    //Methods   
}