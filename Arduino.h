#include <Keypad.h>

char kode[4] = {'1','2','3','4'};
int siffer;
char tastet_kode[5];
const byte numRows = 4; //number of rows on the keypad
const byte numCols = 4; //number of columns on the keypad
byte rowPins[numRows] = {9,8,7,6}; //Rows 0 to 3
byte colPins[numCols] = {5,4,3,2}; //Columns 0 to 3
char keymap[numRows][numCols] = {
  {'1', '2', '3', 'A'}, 
  {'4', '5', '6', 'B'}, 
  {'7', '8', '9', 'C'},
  {'*', '0', '#', 'D'}
};


Keypad myKeypad = Keypad(makeKeymap(keymap), rowPins, colPins, numRows, numCols);

int pir_Led = 12;
int PIR = 10;
bool pir_Verdi;
long int wait = 10000;
long int actual;
int alarm_syrene;
int modus = 0;
long int alarm_lyd_wait = 1000;
int sirene_pin = 11;
int lyd_st = 0;
bool enterKey = false;

void setup(){
  pinMode(pir_Led, OUTPUT);
  pinMode(PIR, INPUT);
  Serial.begin(9600);
  Serial.println("ingen ting skjer....");
}
  
void loop(){
  pir_Verdi = digitalRead(PIR);

  if(pir_Verdi == HIGH && modus==0){
    //digitalWrite(pir_Led, HIGH);
    modus=1;
    actual = millis();
    siffer = 0;
    Serial.println("Sett inn kode" );
  }
  Gjor_noe();
  if((millis() - actual > wait || enterKey) && modus==1){
    enterKey = false;
    for(int i = 0; i < 4; i++){
      if(tastet_kode[i] != kode[i]){
        modus = 2;
        digitalWrite(pir_Led,HIGH);
        Serial.println("INNBRUDD!!!");
        break;
      }
    }
    if(modus != 2){
      modus = 0;
      Serial.println("Riktig kode");
      Serial.println("ingen ting skjer....");
    for(int i = 0; i < 4; i++){
        tastet_kode[i] = -1;
      }
    }
  }
}

void Tast_kode(){
  char keypressed = myKeypad.getKey();
  if(keypressed != NO_KEY && siffer < 4 && keypressed != '*'){
    
    tastet_kode[siffer] = keypressed;
    siffer++;
    Serial.print("Key inputted: ");
    Serial.println(keypressed);
  }else if(keypressed == '*'){
    enterKey = true;
  }
}
  
void Gjor_noe(){
  if(modus==0){
    //Serial.println("ingen ting skjer....");
  }else if(modus==1){
    //Serial.println("Sett inn kode" );
  Tast_kode();
  }else if(modus==2){
    Lyd();
    //Serial.println("INNBRUDD!!!");
  }
}
void Lyd(){
    if(lyd_st==0)
    {
      alarm_syrene=millis();
      lyd_st=1;
      digitalWrite(7,1);
    }
    
    if (millis()- alarm_syrene > alarm_lyd_wait && modus==2 && lyd_st==1)
    {
      lyd_st=0;
      digitalWrite(7,0);
    }
    
     
	{
  analogWrite(sirene_pin,255);
	}
