# K-Digital Training Information Security 3rd Assignment 1

### Overview  

**Subject: 간단한 로그인 기능이 포함된 PHP 페이지 작성**  

**Environment**
```
OS: Ubuntu 18.04 LTS
Language: PHP, HTML
Server: Apache
DB: MySQL
(Goorm IDE - PHP Project Form)
```
1. Source Code Link<a href="#1-source-code-link"><sup>[1]</sup></a>  

2. Sign In Succeed<a href="#2-sign-in-succeed"><sup>[2]</sup></a>  

3. Sign In Failed<a href="#3-sign-in-failed"><sup>[3]</sup></a>  

4. Sign Up Succeed<a href="#4-sign-up-succeed"><sup>[4]</sup></a>  

5. Sign Up Failed<a href="#5-sign-up-failed"><sup>[5]</sup></a>  

6. Sign Out<a href="#6-sign-out"><sup>[6]</sup></a>  

7. Database<a href="#7-database"><sup>[7]</sup></a>  

8. Get to Post<a href="#8-get-to-post"><sup>[8]</sup></a>  

9. Review<a href="#9-review"><sup>[9]</sup></a>  

10. Ref Links<a href="#10-ref-links"><sup>[10]</sup></a>  

---

#### 1. Source Code Link
[Link - KDT_IS3_Assignment1](https://github.com/ymiwm/KDT_IS3_Assignment1)
![Index](/img/indexmain/Index.png)

---

#### 2. Sign In Succeed
![Login](/img/login/Login.png)
![Login - Valid](/img/login/Login%20-%20Valid.png)
![Login - Valid - URL](/img/login/Login%20-%20Valid%20-%20URL.png)
![Main](/img/indexmain/Main.png)

---

#### 3. Sign In Failed
1. Null value(ID and PW)  
- Blank PW
![Login - BlankPW](/img/login/Login%20-%20BlankPW.png)
![Login - BlankPW - URL](/img/login/Login%20-%20BlankPW%20-%20URL.png)
- Blank ID
![Login - BlankID](/img/login/Login%20-%20BlankID.png)
![Login - BlankID - URL](/img/login/Login%20-%20BlankID%20-%20URL.png)

2. No member matching  
![Login - NoMemberData](/img/login/Login%20-%20NoMemberData.png)
![Login - NoMemberData - URL](/img/login/Login%20-%20NoMemberData%20-%20URL.png)

3. Wrong password  
![Login - InvalidPW](/img/login/Login%20-%20InvaildPW.png)
![Login - InvalidPW - URL](/img/login/Login%20-%20InvaildPW%20-%20URL.png)

---

#### 4. Sign Up Succeed
![Register](/img/register/Register.png)
![Register - Valid](/img/register/Register%20-%20Vaild.png)
![Register - Valid -URL](/img/register/Register%20-%20Vaild%20-%20URL.png)

---

#### 5. Sign Up Failed
1. Null value exist  
![Register - BlankInfo](/img/register/Register%20-%20BlankInfo.png)
![Register - BlankInfo - URL](/img/register/Register%20-%20BlankInfo%20-%20URL.png)

2. Member already exists  
![Register - ExistUser](/img/register/Register%20-%20ExistUser.png)
![Register - ExistUser - URL](/img/register/Register%20-%20ExistUser%20-%20URL.png)

---

#### 6. Sign Out
![Logout](/img/logout/Logout.png)

---

#### 7. Database
![DB Table](/img/database/DB%20Table.png)
![DB Tuple(Empty)](/img/database/Check%20Tuple(Empty).png)
![DB Add 1](/img/database/DB%20Add%201.png)

---

#### 8. GET to POST
- *.php 파일에서 GET을 POST로 바꿈으로 Method 변경 가능

---

#### 9. Review

 - 이런식으로 디자인 신경안써도 기능을 스스로 구현하는게 더 중요하다
 - 또한 예외에대해서 처리를 해주는것이 굉장히 중요
 - 개발할때 이러한 예외 처리에 대해 처음부터 고려해서 개발하는것이 굉장히 중요하다
 - 다음 단계가 이제 취약점이 없게끔 개발단계에서 부터 고려하는것
 - 그 다음 단계가 설계 시 부터 취약점이 없게끔 구조 설계를 잘 하는것(orm, sql mapper 등 이용)
 - 지금 스샷 찍어서 올린 것들이 정상 상황과 예외 상황에 대한 개발 명세를 적은것이나 마찬가지인것.
 - 이런 스샷 하나 하나를 다듬고 디자인을 붙이고 다른 서비스와 연결하는 것이 결국 개발의 전부
 - 세션까지 생각한것이 아주 좋다
 - include 폴더 따로 관리하는것도 좋다. 실제 그누보드나 워드프레스도 코드 보면 inc 폴더 따로 둬서 관리함
<br/><br/>
 - 다만 로그인 성공/실패/예외에 대한것들을 뷰로 따로 두고 개발하였으면 더 좋았을것(유지보수 용이성)
 - 실패나 예외 상황 발생 시 html과 exit을 활용하는것이 아닌 하나의 단일 페이지에서 ajax로 요청 후 그 결과값에 따라 페이지 이동 없이 띄워주는것이 베스트

--- 

#### 10. *Ref Links*  


---

[*Go to top* ↑](#k-digital-training-information-security-3rd-assignment-1)