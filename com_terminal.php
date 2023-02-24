เป็นคำสั่งที่มีไว้ใช้งานที่โฟลเดอร์งานนั้นเช่น
git init


ใช้สำหรับเพิ่มไฟล์เข้าไปใน stage (เป็นการระบุว่าต้องการที่จะสร้างความเปลี่ยนแปลงไฟล์ไหนใน git บ้าง) เช่น
git add . = ทั้งโฟลเดอร์
git add index.php

ใช้สำหรับตรวจสอบว่ามีไฟล์ไหนที่ยังไม่ได้ add หรือมีการเปลี่ยนแปลงแล้วยังไม่ถูกจัดการบ้าง
git status


เป็นการย้อน version ไฟล์ให้กลับไปอยู่ในสภาพเดิมก่อนที่จะ add ไฟล์เข้าสู่ stage
git reset


ยืนยันการเปลี่ยนแปลงไฟล์ที่ถูก add ลงใน stage โดยสามารถใส่ comment โดยการเติม -m ด้านหลัง เช่น
git commit -m “change function b”

เป็นการก้อปปี้โปรเจคจำลองมาจากโปรเจคหลัก โดยเราจะสามารถเปลี่ยนแปลงไฟล์ในโปรเจคจำลองนี้ได้โดยที่ไม่กระทบโปรเจคหลัก (ไฟล์จำลองที่เราทำการเปลี่ยนแปลงจะเรียกว่า local repository และไฟล์หลักที่อยู่คนละที่จะเรียกว่า remote repository)
git clone ตามด้วย URL ที่จะ Clone

เป็นการส่งไฟล์ที่ commit แล้วเข้าสู่ remote repository
git push

ใช้ตรวจสอบว่าไฟล์ ในlocal กับremote มีความแตกต่างกันหรือไม่ ไฟล์ไหนใหม่กว่า หรือล้าสมัยอยู่กี่ commit (ซึ่งตรงนี้ comment จะช่วยเราได้มากว่า commit นี้เราทำอะไรลงไป เพราะฉะนั้นควร comment อยู่เสมอและต้องเขียนให้สื่อความหมาย)
git fetch

เป็นการดึงไฟล์ที่มีการเปลี่ยนแปลงใน remote มาเปลี่ยนแปลงใน local ซึ่งเป็นการใช้คำสั่ง git fetch ตามด้วย git merge
git pull
