package Java;

public class Card extends Payment
{
    int number;
    int cvv;
    String date;

    public Card(int number, int cvv, String date)
    {
        this.number = number;
        this.cvv = cvv;
        this.date = date;       
    }
}