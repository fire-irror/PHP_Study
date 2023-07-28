# php study

<meta> 문서에 대한 정보를 알려주는 태그

<meta name="viewport" content="width=device-width, initial-scale=1.0">  
디바이스 크기에 맞게 설정해줌

<div> 박스 만드는 테그

div#wrapper

nav>ul>li*5>{menu$}
   <nav>
        <ul>
          <li>menu1</li>
          <li>menu2</li>
          <li>menu3</li>
          <li>menu4</li>
          <li>menu5</li>
        </ul>
      </nav>
    </div>

div.content>h2{미디어쿼리를 이용한 웹}
<div class="content">
      <h2>미디어쿼리를 사용한 반응형 웹</h2>
    </div>

 *{
전체 화면 설정
}

<< 반응형 웹
1.css의 media query 사용하기
2. 부트스트랩 사용하기.
-----------------------------

1.media query 사용하기

1)디바이스 장치 넓이에 따른 구분
-1200px 이상: 큰 모니터의 데스크탑
-992px 이상: 작은 모니터의 데스크탑
-768px 이상: 태블릿
-767px 이상: 스마트폰

2)형식
@media (해상도){
selector{속성:값:}
}


<<bootstrap
반응형 웹을 만드는 웹 프레임워크

1.부트스트랩 파일을 다운로드해서 사용하는 방법
2.CDN을 사용(content delivery network)	//인터넷이 반드시 필요하다. 


<<conteiner / container-fluid
1.conteiner:고정된 폭만큼 자치
2.conteiner-fluid: 무조건 100% 차지

<div class = "container / container-fluid">
	<div class="row">
		<div class= "col-sm-3">
이 순서대로 작용한다.

3.col-(1번)-(2번)

(1번) 기기의 크기
1)xs : 576이하 (스마트폰) 모든 기기에서 같은 비율을 가진다. (기기에 관계없이 일정 크기 유지)
2)sm : 768d이상(스마트폰)
3)md : 992이상(테블릿)
4)lg : 1200이상(데스크탑)
5)xl : 1400이상(데스크탑)

***
sm, md, lg xl을 가지는 클래스명은 스마트폰 사이즈가 되면 
무조건 12를 가진다. (한줄씩 차지)

***
(2번) 
grid system에서는 가로를 12
브라우저 가로 전체를 12로 설정
무조건 전체가 12이여야 한다. (비율을 합해서 12여야 한다)


web

client(사용자, 브라우저)
:내컴퓨터(탐색기), html, css, js

클라이언트는 서버에게 데이터를 요청하고 서버는 요청받은 데이터를 처리하여서 다시 클라이언ㅡ에게 넘겨쥰다.
request(요청)

server
제공(response)
web server(Apache)
반드시 Server가 있어야함. php, node, spring



Server
http://www.naver.com
이 주소를 컴퓨터가 알아들을 수 있는 숫자(ip)로 바꿔 주는 것이 DNS

domain
http://localhost(domain)

root: http://localhost
root C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\php_tests




php 문법 특징
1.자바 문법과 거의 동일(for, if, while, do~while)
2. 변수명 앞에 $를 붙인다. 타입은 필요없음
Class test{
	private int age;
	}

$age; =10;
$age"type";

3. 변수명은 숫자로 시작할 수 없고, 공백이 포함될 수 없다. 
4.변수명은 대소문자 구분



Parse error: syntax error, unexpected token
무조건 문법오류



<<배열

1.array함수 이용
	$arr=array("apple","banana","grape");


2.range함수 이용
	$arr=range(1,10) 1,2,3,4,5,6,7,8,9,10의 배열
	$arr=range(1,10,2) 1,3,5,7,9 배열
	$arr=range('a','z'); a~z까지의 배열 26개의 방
	
	$arr[0]="tom";
	$arr[1]="jane"
	$arr[2]="jake"


배열의 길이 구하는 함수 ==sizeof(배열의 이름)
-----------------------------------------------------------------------------------------
<<문자열 함수
1. strlen(문자열) : 공백을 포함하여 문자열의 길이를 구하는 함수 
2. strcmp(문자열1,문자열2) : 문자열 비교하는데 일치하면 0 불일치면 1을 출력한다
3. strpos(문자열1, 문자2): 문자열1에서 문자2가 있는 인덱스를 반환
4. strtolower(): 소문자 변환
5. strtoupper():대문자로 변환
6. substr() : 문자열 추출
7.implode() : 배열의 값을 구분자를 기준으로 한 문자열로 변환
8.explode() : 문자열을 구분자를 기준으로 잘라서 배열에 저장
9.str_replace(원래 문자열, 변경 문자열) : 문자열을 치완==교체한다.


//php공식사이트
php.net
phpschool.com
-----------------------------------------------------------------------------------------
<<file
1.파일읽기 = read한다 == 불러온다
1)fgetc()			//한 문자씩 읽어온다
2)fgets()			//한 문자열을 읽어온다	
3)fread()			//파일크기 만큼 읽어온다
4)file_get_contents()	//파일의 내용을 한번에 읽어오기


2.파일쓰기 = write한다 == 저장한다.
1)fwrite()
2)file_put_contents()
-----------------------------------------------------------------------------------------

<<file의 작업순서
1.파일을 연다 (fopen())
2. 원하는 작업을 한다 (위에서 말한 1,2번 작업을 이야기 한다.)
3. 파일을 닫는다. (fclose())


<<form 태그
-사용자의 입력을 받는 폼
<form method = "post" action="(1)"
</form>
(1)번에 들어갈 파일들: 서버사이드언어 php, jsp, node, spring

  <form method="post" action="#">
    id : Name: <input type="text" name="user_name" maxlength="12" size="20" value="123"/>
1)maxlength: 입력할 수 있는 문자 갯수
2)size: 창의 크기
3) value : 초깃값

1.<input type="text">
		"password"
		"checkbox"
		"radio"
		"reset"
		"button"	
		"submit"
--------------------------------
		"number"
		"email"
		"color"

2. <select>
	<option>

3. <textarea>

*form작성시에 반드시 name입력

<<form data 추출하기
get방식 1. 주조창에 직접 입력
2. a <"herf")
3. 클리언트에 정보를 요청하는 방식은 get prot2가지 인다
1_ get방식
2. ) poest방식 : form태그


/// 두 개의 차이점 
get은 헤더로 들어가기 때문에 우리 눈에 보임
post는 body로 들어간다


>>
1.database : 데이터들의 집합
2.DBMS : 사용자가 데이터베이스를 사용하기 쉽게 관리해주는 프로그램

3.사용방법
1) 사용할 데이터베이스 생성
2) 계정생성(id, password)
3) 계정에 사용권한 부여(CRUD 권한)

4. 접속방법
mysql-u 아이디 -p비밀번호 사용할 데이터베이스



1. DB생성
2. 계정생성
-계정생성, 사용할 DB연동
3.권한 부여

create datebase test; //test db만들기
create user 'test'@localhost identified by '1111';	//user name 과 비번 만들기
grant all privileges on test.* to test@'localhost' with grant option;	계정 db연동, 권한부여
*은 전체를 나타낸다.

mysql -utest -p1111 test //test db로 이동한다.
show tables; //테이블을 보여준다.

create table emp (	//emp는 테이블 이름
    -> empno int(4),
    -> ename varchar(10),
    -> job varchar(10),
    -> mgr int(4),
    -> hiredate date,	
    -> sal int(10),
    -> comm int(10),
    -> deptno int(2),
    -> primary key(empno));

create table dept(
    -> deptno int(20),
    -> dname varchar(20),
    -> loc varchar(20),
    -> primary key(deptno)); 


mysql oracle == 관계형 DB(RDBMS)
데이터가 테이블로 이루어져있다는 이야기임 행과 열로 이루어져 있다.

행 ==> record, 튜플, row
열 ==> column , 속성, 필드


1. insert into 테이블명(필드, 필드, 필드.....) values(값, 값, 값.....);
 insert into 테이블명 values(값, 값, 값.....);


insert into emp values(7369, 'SMITH','CLERK',7902,'2023-03-02',1600,300,30);

데이터 조회 
desc emp;	//테이블 구조 보기

select * from emp;	//이 테이블에 있는 모든 것을 보겠다
select empno, ename from emp;	//원하는 것만 쳐서 볼 수 있음


클라이언트 언어: 브라우저에서 실행가능(css,js) 탐색기에서 더블클릭으로 실행
server 언어: 서버가 무조건 있어야 한다. (php, jsp, node, spring)

<<테이블 join
테이블 2개이상을 가지고 쿼리 실행

1)부서 이름이 accountiong인 사원이름 조회
select ename from emp, dept
where  emp.deptno = dept.deptno
and dname='accounting';

-------------------------------
테이블에 별명을 지어준다.
select ename
from emp e,dept d
where e.deptno=d.deptnoㅁ
and d.dname='accounting';


----------------------------
delete 테이블 내용 지우기
형식 : delete from 테이블명
where 조건;

delete from emp
where empno=7782;

delete from emp
where empno=7792 and sal>3000;


<<alter: 테이블 구조 변경
1. 테이블 이름 변경 rename
emp->emp1
형식 : alter table 테이블 이름 rename 바뀔 테이블명;

2.필드 추가 add
형식 : alter table 테이블 이름 add 추가 필드이름 타입;

3. 필드타입 변경 modify
형식 : alter table 테이블 이름 modify 변경할 필드이름 새로운 타입;

4. 필드이름 변경 change
형식 : alter table 테이블 이름 change 기존 필드이름 새로운 필드이름 새로운 필드타입;

5.필드삭제 drop
형식 : alter table 테이블 이름 drop 필드명;

alter table emp drop addr;

6. 테이블 삭제  drop
drop table 테이블명;

delete : 내용

drop: 테이블 자체 삭제





