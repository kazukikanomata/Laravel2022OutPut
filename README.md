<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Content
My CS50 project is done. <br>
I made Todo Application by laravel. To be honest, I was busy working summer intern program at the same time, but I managed to do this project.<br>
This project's point is able to controll my task every catrgorires. I made four categories.<br>
NW is stand for Needs Work. Let me give you an example. Needs Work is like your homework or your jobs which you work at the company etc... 
NP is stand for Needs Private. Let me give you. Needs Private is clean your room or have a meal etc... 
WW is stand for Wants Work. Let me give . Wants Work is study to invest or to make an application etc...
WP is stand for Wants Private. Let me . Wants Private is like a web design or your hobbys.<br>
This four categories will make your lives userful. More or less, you don't have to think about tasks or You can decide to do tasks what you must do early.<br>
In the future, I want to add two functions.<br>
First, I'd like to use API with LINE API userfriendly. In Japan, A lot of people use LINE application, so I think it is essential to connect LINE.
Chat bot and LINE LOGIN funciton are very useful.<br>
Second, I'd like to add midle table. Now, This application has one to many about tasks table and categories table.
Using midle table, it'll be many to many table design, so User is able to add category which they want to add.<br>
That's why I want to add two functions.


## プロジェクト名 : Focus

<p>Laravelにてタスク管理ができる。Webアプリをつくりました。</p>

<p>Youtube:　https://youtu.be/6ovQ1A9Y3Pk</p> 

## 技術
<ul>
    <li> Laravel 9</li>
    <li> MySQL8 </li>
    <li> PHP 8.1.2 </li>
    <li> Breeze </li>
    <li> XAMPP</li>
    <li> Docker</li>
    <li> TailWindCSS DaisyUI</li>
    <li> Laravel forge</li>
</ul>


## 目的

<p>自分自身がマルチタスク人間であり、優先順位がつけられないこと。</p>

<p>また、マルチタスクは生産性を著しく下げます。</p>

>ミシガン大学の心理学教授らによると、マルチタスクをする人たちは、タスクをひとつずつこなすグループよりも、40パーセントも生産性が低いという研究結果を発表しています。

>記憶にかかわる脳の「海馬」に作用し、記憶力の低下につながることが東京医科歯科大学脳統合機能研究センター特任教授・朝田隆氏監修）によって示されています。

<p>そういった問題を対処したいということからこのアプリで改善できたらと思い、作成しました。</p>

## URL

<p> URL：https://kazu-focus.xyz/ </p>

<p>【テスト用アカウント】</p>

<p>メールアドレス：test@123456.com </p>

<p>パスワード：test1234</p>

## 機能

<ol>
    <li>CRUD機能</li>
    <li>カテゴリーごとにタスクを表示</li>
    <li>LINEのAPI ログイン</li>
    <li>LINEMessageAPIと連携　→　まだ実装途中</li>
</ol>

## ER図

[![](https://mermaid.ink/img/pako:eNqdVMFu1DAQ_RXL57Ta7Hbbbc6IC-LEDUWK3Hh2azWxV46zsGT3kESCC0gIhPiBqodWYjkgJKoKPsYU8RnYSZck2hwoVpQo82bevPGMneFQUMAeBvmAkZkksc99jsxKE5AJWq329kSGFEnOEuQhH7s_r691_kmXF7q80cVXnb_-ff7q14fP1lj80MU3XWx08U4Xhc7PfVyThUTBTEgGfYzGrwq-0uVLXXzR5aWlzq9uN991_lHnF7sJtryNyFXWTmJ5df6-ejauIXJtRDsmq3_sOmEzxhViFD181FgXRIanRCJOYrBsfwsub27fvtkKaHtCTFjUmBWLIVEknqMaCRYg2ZQBDYjaDZ6TJHkmJO1BpFgwCnIXiRiHgPWESIghPgEZKHEGvE9SKMHsVldKg6Zz2kHX9afu2T_vXCi4At5Tq0mi0qSbuHo1Jpu_MtMUgi5kM9oediq3xrv-LzvA_5bcRSlE0LMhrYm71zzdX56vWgK3IrCDY5Bmtqg5wJUAH6tT03sf2wNAYUrSSNlRta4kVeLJkofYUzIFB9eEd6cee1MSJcYKlCkhH9eXQnU3OHhO-FMhGh_zj70MP8fe8WjfPZgMj4aH48F4MjwYOXiJPdcd7Q_sOjweDI8m4_Fo7eAXFYO7_gNGN5CQ?type=png)](https://mermaid-js.github.io/mermaid-live-editor/edit#pako:eNqdVMFu1DAQ_RXL57Ta7Hbbbc6IC-LEDUWK3Hh2azWxV46zsGT3kESCC0gIhPiBqodWYjkgJKoKPsYU8RnYSZck2hwoVpQo82bevPGMneFQUMAeBvmAkZkksc99jsxKE5AJWq329kSGFEnOEuQhH7s_r691_kmXF7q80cVXnb_-ff7q14fP1lj80MU3XWx08U4Xhc7PfVyThUTBTEgGfYzGrwq-0uVLXXzR5aWlzq9uN991_lHnF7sJtryNyFXWTmJ5df6-ejauIXJtRDsmq3_sOmEzxhViFD181FgXRIanRCJOYrBsfwsub27fvtkKaHtCTFjUmBWLIVEknqMaCRYg2ZQBDYjaDZ6TJHkmJO1BpFgwCnIXiRiHgPWESIghPgEZKHEGvE9SKMHsVldKg6Zz2kHX9afu2T_vXCi4At5Tq0mi0qSbuHo1Jpu_MtMUgi5kM9oediq3xrv-LzvA_5bcRSlE0LMhrYm71zzdX56vWgK3IrCDY5Bmtqg5wJUAH6tT03sf2wNAYUrSSNlRta4kVeLJkofYUzIFB9eEd6cee1MSJcYKlCkhH9eXQnU3OHhO-FMhGh_zj70MP8fe8WjfPZgMj4aH48F4MjwYOXiJPdcd7Q_sOjweDI8m4_Fo7eAXFYO7_gNGN5CQ)


## 今後
<ol>
    <li> Vue.jsでSPA実装</li>
    <li> 中間テーブルを設置して、多対多のテーブルを設計し、カテゴリーを増やせるようにする</li>
    <li> LINE API　チャットボットと連携</li>
    <li> Reactでリファクタリング</li>
</ol>

## 12月中
<ol>
    <li>Vue.jsでのSPA</li>
    <li> LINE API　チャットボットと連携</li>
</ol>

## 1月中
<ol>
    <li> Reactでリファクタリング</li>
    <li> 中間テーブルを設置して、多対多のテーブルを設計し、カテゴリーを増やせるようにする</li>
</ol>
