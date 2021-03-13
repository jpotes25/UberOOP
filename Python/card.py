from payment import Payment

class Card(Payment):
    number = int
    cvv = int
    date = str
    def __init__(self, number, cvv, date):
        super().__init__()
        