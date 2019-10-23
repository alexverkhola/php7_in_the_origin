extern crate chrono;
extern crate rand;

use chrono::{Utc};
use rand::Rng;
fn main() {

    let rand_number = rand::thread_rng().gen_range(1, 101);
    // println!("The secret number is: {}", secret_number);

    let now = Utc::now();
    // println!("{}", now);

    //Send headers
    println!("Content-type: text/html");
    println!("Pragma: no-cache\n");
    println!("\n");

    //Send html document
    println!("<!DOCTYPE html>");
    println!("<html-lang='ru'>");
    println!("<head>");
    println!("<title> Случайное число и дата </title>");
    println!("<style>
                    h1, h2, p {{ text-align: center; }} 
                    
                    footer {{ text-align: center;
                              position: absolute;
                              bottom: 0;
                              width: 100%;
                              height: 2.5rem; }}
                    
                    </style>");
    println!("<meta charset='utf-8'>");
    println!("</head>");
    println!("<body>");
    println!("<h1> Привет Юзер </h1>");
    println!("<h2> Эта программа написана на Rust, и запущена как cgi сценарий </h2>");
    println!("<p>Сегодня: {} </p>", now);
    println!("<p>Случайное число: {} </p>", rand_number);
    println!("<footer>Все права защищены &#169;alexverkhola 2019</footer>");
    println!("</body>");
    println!("</html>");
}
