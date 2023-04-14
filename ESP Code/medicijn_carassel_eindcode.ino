#include <Arduino.h>

#include <WiFi.h>
#include <WiFiMulti.h>

#include <HTTPClient.h>
#define USE_SERIAL Serial

#define LIGHT_SENSOR_PIN 36
const int stepPin = 4; 
const int dirPin = 2; 
int stepdelay = 5000;

WiFiMulti wifiMulti;

void setup() {
    USE_SERIAL.begin(9600);
    pinMode(stepPin,OUTPUT); 
    pinMode(dirPin,OUTPUT);
    pinMode(26, OUTPUT);
    
    for(uint8_t t = 4; t > 0; t--) {
        USE_SERIAL.printf("[SETUP] WAIT %d...\n", t);
        USE_SERIAL.flush();
        delay(1000);
    }

    wifiMulti.addAP("LK", "#jemoeder");

}

void state_stap_verder(){    
      digitalWrite(dirPin,LOW); // Enables the motor to move in a particular direction
      // Makes 200 pulses for making one full cycle rotation
      for(int x = 0; x < 16.40; x++) {
        digitalWrite(stepPin,HIGH); 
        delayMicroseconds(stepdelay); 
        digitalWrite(stepPin,LOW); 
        delayMicroseconds(stepdelay); 
        Serial.println("IK DOE EEN STAP");
      }  
      if((wifiMulti.run() == WL_CONNECTED)) {
          HTTPClient http;
          http.begin("http://rpi-lk.local/controller_reset_2/"); //HTTPS
          int httpCode = http.GET();
        
          Serial.println(httpCode);
          http.end();
      }
      
}

void reset(){
    // wait for WiFi connection
    if((wifiMulti.run() == WL_CONNECTED)) {
      
        HTTPClient http;
        // configure traged server and url
        http.begin("http://rpi-lk.local/get_app_state/"); //HTTPS
        
        // start connection and send HTTP header
        int httpCode = http.GET();
        
        Serial.println(httpCode);
        // httpCode will be negative on error
        if(httpCode > 0) {
            // file found at server
            if(httpCode == HTTP_CODE_OK) {
                String payload = http.getString();
                Serial.println(payload);
                for(int state = payload.toInt() ; state > 0; state--){
                  digitalWrite(dirPin,HIGH); // Enables the motor to move in a particular direction
                  // Makes 200 pulses for making one full cycle rotation
                  for(int x = 0; x < 16.40; x++) {
                    digitalWrite(stepPin,HIGH); 
                    delayMicroseconds(stepdelay); 
                    digitalWrite(stepPin,LOW); 
                    delayMicroseconds(stepdelay); 
                    Serial.println(state);
                  }
                  Serial.println(state);
                  delay(500);
                  }
              }
              if((wifiMulti.run() == WL_CONNECTED)) {
                      http.begin("http://rpi-lk.local/controller_reset/"); //HTTPS
                      int httpCode = http.GET();
        
                      Serial.println(httpCode);
                      http.end();
            }
            
        http.end();
    } 
  }
}

void remote_rotate(){
    // wait for WiFi connection
    if((wifiMulti.run() == WL_CONNECTED)) {
      
        HTTPClient http;
        // configure traged server and url
        http.begin("http://rpi-lk.local/stap_verder/"); //HTTPS
       
        http.end();
    } 
}

void stap_count(){
      if((wifiMulti.run() == WL_CONNECTED)) {
        Serial.println("COUNTINGGGGGGGGGGGGGGGGGGGGGGG");
        HTTPClient http;
        // configure traged server and url
        http.begin("http://rpi-lk.local/stap_count/"); //HTTPS

        int httpCode = http.GET();
        if(httpCode > 0){
          String payload = http.getString();
                Serial.println(payload);
        }
        
        http.end();
    } 
}

void loop() {
    
    
    if((wifiMulti.run() == WL_CONNECTED)) {
      
        HTTPClient http;
        // configure traged server and url
        http.begin("http://rpi-lk.local/get_controller_state/"); //HTTPS
        
        // start connection and send HTTP header
        int httpCode = http.GET();
        
        // httpCode will be negative on error
        if(httpCode > 0) {
            // file found at server
            if(httpCode == HTTP_CODE_OK) {
                String payload = http.getString();
                Serial.println(payload);
                int analogValue = analogRead(LIGHT_SENSOR_PIN);
                Serial.print("Analog Value = ");
                Serial.println(analogValue);   // the raw analog reading
                if (analogValue < 1600 && analogValue > 50){
                  Serial.println(" => perfect");
                  state_stap_verder();
                  stap_count();
                  delay(5000);
                }
                else{
                  if (payload == "1"){
                    Serial.println("stap 1");
                    reset();
                  }else if(payload == "2"){
                    Serial.println("stap 2");
                    state_stap_verder();
                  }else{
                    Serial.println("standby");
                  }
                }  
        }
        http.end();
    } 

  }



  
    
    
}
