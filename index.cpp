#include <iostream>

int main() {
    int a ;
    int b ;
    int area ;

    std::cout << "Enter width: ";
    if (!(std::cin >> a)) return 1;

    std::cout << "Enter height: ";
    if (!(std::cin >> b)) return 1;

    area = a * b;
    std::cout << "The area of the rectangle is: " << area << '\n';

    return 0;
}
