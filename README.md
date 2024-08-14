![image](https://github.com/user-attachments/assets/272cbab1-222a-43d0-9021-d6e382bb3a32)### SAVE LUNCH

한국 코드페어 출품작 

개발언어 : HTML     CSS     PHP     JAVASCRIPT     VISUAL BASIC.net     C++
서버환경 : UBUNTU 18.04, MYSQL 

### 작품설계

- 로그인 시스템, 학생들의 회원가입, 급식선택 사전조사 프로그램을 HTML,CSS로 폼을 만들어 PHP를 이용해 Ubuntu 18.04 리눅스서버와 통신하도록 합니다. 이를 통해 급식인원을 조사한 후 그 데이터를 PHP를 이용해서 서버에 전송하여 ADMIN 페이지에서 급식실 영양사 선생님께서 확인할 수 있도록 하고 이를 통해 실질적인 급식 인원에 맞는 음식을 준비하도록 합니다.
- 아두이노와 E18-D80NK 근접센서를 이용해 VISUAL BASIC으로 제작한 프로그램과  
시리얼 통신으로 데이터를 받고 프로그램에서 POST방식으로 서버에 데이터를 전송하여
대기인원을 파악하여 다음 급식학급에 신호를 전달하거나 현장에서의 대기 라인 인원을 알 수 있도록 합니다.


### 회원가입, 로그인
회원가입 및 로그인 시스템 :학생들이 HTML, PHP, 서버를 이용해 회원가입하고 학번으로 로그인 합니다.

![image](https://github.com/user-attachments/assets/48ee3250-ad54-4abf-aab5-c5215fe4e0d6)
![image](https://github.com/user-attachments/assets/b468e578-43ae-4c41-967c-54cedadbf44d)

### 설문조사 시스템
설문조사 시스템 :메인 페이지입니다. 세션정보를 가져와 누가 로그인했는지 확인하는 문구를 띄웠습니다. 설문조사 하러 가기 버튼을 클릭하면 설문조사 페이지로 이동합니다. 로그아웃 버튼을 누르면 세션 정보를 없애 버려 로그아웃이 됩니다.

![image](https://github.com/user-attachments/assets/ed258c4f-4a48-4130-bd7c-b2b0507e47a5)
![image](https://github.com/user-attachments/assets/76d83219-2e01-4063-a5e8-e1b31bf8f5a7)

### ADMIN 관리자 페이지
관리자(ADMIN)페이지에서는 설문조사현황 등을 확인할 수 있습니다.
관리자페이지에서 실시간 센서현황을 클릭하면 보이는 페이지이며 이 페이지는 센서가 감지되어 있는 상태인지 안 되어 있는 상태인지 알 수 있는 페이지입니다. 
“1”이면 센서에 무언가 감지가 되었다는 의미입니다. “0”은 아무것도 감지가 되지 않았다는 의미입니다.

![image](https://github.com/user-attachments/assets/780936f8-f3de-488f-9aa6-d652ab4555c0)
![image](https://github.com/user-attachments/assets/68f86602-dbd6-4632-ad62-eb14294c920b)
![image](https://github.com/user-attachments/assets/0a23c2c7-20a1-4930-8e48-f96deb0c6c92)

### 임베디드 개발
아두이노(Arduino)와 근접센서, 프로그램, 서버를 이용해 대기 줄 길이를 알 수 있도록 하였습니다(아두이노와 E18-D80NK 근접센서를 이용해 VISUAL BASIC으로 제작한 프로그램과 시리얼 통신으로 데이터를 받고 프로그램에서 POST방식으로 서버에 데이터를 전송).

![image](https://github.com/user-attachments/assets/2e849699-8b90-4223-9847-0a48dacea501)
![image](https://github.com/user-attachments/assets/5b28c38e-d569-4157-ab68-4578e7ccc574)

센서가 꺼지면 “다음 반 내려 오세요”라는 페이지가 보이고, 센서가 켜져 있으면 “다음 반 대기해 주세요”라는 페이지가 보입니다.

![image](https://github.com/user-attachments/assets/b9312193-15e4-48f2-a0b7-2c89ab13c0e9)
![image](https://github.com/user-attachments/assets/6af78cb7-5920-4d62-8e4b-5778e087882d)

### .NET 시리얼 통신 및 웹통신 개발
아두이노와 시리얼 통신 및 POST로 서버에 데이터를 전송하기 위해 만든 프로그램입니다

![image](https://github.com/user-attachments/assets/6dc1f899-115e-4086-8380-74ed7e2245ed)





