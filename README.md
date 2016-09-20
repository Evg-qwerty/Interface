## Интерфейс в PHP

PaymentService - общий класс для все платежных систем принимает платежный класс и выполняет его метод payment. Наличие метода payment в платежном классе обеспечивает интерфейс PaymentSystemInterface.php. При создании нового платежнго класса система IDE выдаст ошибку если в нем будет отсутсвовать интерфейс.

Класс должен содержать интерфейс имплементированный из PaymentSystemInterface в данном случае это метод payment(). Метод payment() является общим методом для всех платежных классов

Грубо говоря, мы хотим обрабатывать все платежи одним классом PaymentService, но так как платежные системы могут писаться разными людьми в разное время, мы при помоши интерфейса PaymentSystemInterface.php делаем так чтобы, наш класс PaymentService на входе принимал только те платежки которые имеют в себе определенный метод.