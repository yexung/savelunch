void setup() {

  Serial.begin(9600);// setup Serial Monitor to display information

  pinMode(2, INPUT_PULLUP);// define pin as Input  sensor

  pinMode(9, OUTPUT);// define pin as OUTPUT for ACTION

  pinMode(3, INPUT_PULLUP);

  pinMode(10, OUTPUT);

}

 

void loop() {


  int L =digitalRead(2);// read the sensor 

  

      if(L == LOW){

        Serial.println("1");

        digitalWrite(9,HIGH);// send singal

    

     }else{

 

        Serial.println("2");

        digitalWrite(9,LOW);// turn the relay OFF

     }

       int A =digitalRead(3);// read the sensor 

  

      if(A == LOW){

        Serial.println("3");

        digitalWrite(10,HIGH);// send singal

    

     }else{

 

        Serial.println("4");

        digitalWrite(10,LOW);// turn the relay OFF

     }

delay(1000);
