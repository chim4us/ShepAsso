<?php

include_once("php_codes/db_conx.php");


$tbl_user_creds = "CREATE TABLE IF NOT EXISTS USER_CREDS(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    Username VARCHAR(25) NOT NULL,
    First_Name VARCHAR(255) NOT NULL,
    Last_Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Phone VARCHAR(20) NOT NULL,
    Del_Flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    IP VARCHAR(255) NOT NULL,
    IP2 VARCHAR(255) NOT NULL,
    SignUp_Date DATETIME NOT NULL,
    Last_Login DATETIME NOT NULL,
    Lchg_Time DATETIME NOT NULL,
    EmpId VARCHAR(10),
    PRIMARY KEY(Id))
    ";
$query = mysqli_query($db_conx, $tbl_user_creds);
if($query === TRUE){
    echo "<h3>USER_CREDS table created ok :) </h3>";
} else {
    echo "<h3>USER_CREDS table NOT created :( </h3>";
}

$Idx_user_creds = "CREATE UNIQUE INDEX IDX_USER_CREDS ON USER_CREDS (username)";
$query = mysqli_query($db_conx, $Idx_user_creds);
if($query === TRUE){
    echo "<h3>IDX_USER_CREDS index created ok :) </h3>";
} else {
    echo "<h3>IDX_USER_CREDS index NOT created :( </h3>";
}

$tbl_Pic_Details = "CREATE TABLE IF NOT EXISTS PIC_DETAILS(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    pic_id  VARCHAR(55) NOT NULL,
    Lchg_Username VARCHAR(25) NOT NULL,
    lchg_time DATETIME NOT NULL,
    pic_type VARCHAR(20) NOT NULL,
    del_flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    PRIMARY KEY(Id),
    FOREIGN KEY (Lchg_Username) REFERENCES USER_CREDS(Username))
    ";
$query = mysqli_query($db_conx, $tbl_Pic_Details);
if($query === TRUE){
    echo "<h3>PIC_DETAILS table created ok :) </h3>";
} else {
    echo "<h3>PIC_DETAILS table NOT created :( </h3>";
}

$Idx_pic_details = "CREATE UNIQUE INDEX IDX_PIC_DETAILS ON PIC_DETAILS (pic_id)";
$query = mysqli_query($db_conx, $Idx_pic_details);
if($query === TRUE){
    echo "<h3>IDX_PIC_DETAILS index created ok :) </h3>";
} else {
    echo "<h3>IDX_PIC_DETAILS index NOT created :( </h3>";
}

$tbl_Project = "CREATE TABLE IF NOT EXISTS PROJECT(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    pro_name VARCHAR(255) NOT NULL,
    Bed int,
    Bath int,
    Garages int,
    location VARCHAR(255) NOT NULL,
    Text LONGTEXT,
    BsWrkFlg ENUM('Y','N') NOT NULL DEFAULT 'N',
    HmSldFlg ENUM('Y','N') NOT NULL DEFAULT 'N',
    pic_id VARCHAR(55) NOT NULL,
    Lchg_username VARCHAR(25) NOT NULL,
    recre_time DATETIME NOT NULL,
    lchg_time DATETIME NOT NULL,
    recre_username VARCHAR(25) NOT NULL,
    del_flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    PRIMARY KEY(Id),
    FOREIGN KEY (Lchg_Username) REFERENCES USER_CREDS(Username),
    FOREIGN KEY (recre_username) REFERENCES USER_CREDS(Username),
    FOREIGN KEY (pic_id) REFERENCES PIC_DETAILS(pic_id))
    ";
$query = mysqli_query($db_conx, $tbl_Project);
if($query === TRUE){
    echo "<h3>PROJECT table created ok :) </h3>";
} else {
    echo "<h3>PROJECT table NOT created :( </h3>";
}

$tbl_Pass_Details = "CREATE TABLE IF NOT EXISTS PASS_DETAILS(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    lchg_time DATETIME NOT NULL,
    del_flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    preferred_flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    PRIMARY KEY(Id),
    FOREIGN KEY (username) REFERENCES USER_CREDS(Username))
    ";
$query = mysqli_query($db_conx, $tbl_Pass_Details);
if($query === TRUE){
    echo "<h3>PASS_DETAILS table created ok :) </h3>";
} else {
    echo "<h3>PASS_DETAILS table NOT created :( </h3>";
}

$Idx_pass_Details = "CREATE UNIQUE INDEX IDX_PASS_DETAILS ON PASS_DETAILS (username,password)";
$query = mysqli_query($db_conx, $Idx_pass_Details);
if($query === TRUE){
    echo "<h3>IDX_PASS_DETAILS index created ok :) </h3>";
} else {
    echo "<h3>IDX_PASS_DETAILS index NOT created :( </h3>";
}

$Idx_pass_Details = "CREATE INDEX IDX_PASS_DETAILS1 ON PASS_DETAILS (password)";
$query = mysqli_query($db_conx, $Idx_pass_Details);
if($query === TRUE){
    echo "<h3>IDX_PASS_DETAILS index created ok :) </h3>";
} else {
    echo "<h3>IDX_PASS_DETAILS index NOT created :( </h3>";
}

$tbl_User_Login_Creds = "CREATE TABLE IF NOT EXISTS USER_LOGIN_CREDS(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    pwd_vry_code VARCHAR(255) NOT NULL,
    num_pwd_history int,
    pwd_last_mod_time  DATETIME NOT NULL,
    num_pwd_attempts int,
    login_time DATETIME NOT NULL,
    disable_from_date DATETIME NOT NULL,
    disable_to_date DATETIME NOT NULL,
    pwd_exp_date DATETIME NOT NULL,
    del_flg ENUM('Y','N') NOT NULL DEFAULT 'N',
    PRIMARY KEY(Id),
    FOREIGN KEY (username) REFERENCES USER_CREDS(Username),
    FOREIGN KEY (password) REFERENCES PASS_DETAILS(password))";
$query = mysqli_query($db_conx, $tbl_User_Login_Creds);
if($query === TRUE){
    echo "<h3>USER_LOGIN_CREDS table created ok :) </h3>";
} else {
    echo "<h3>USER_LOGIN_CREDS table NOT created :( </h3>";
}

$tbl_Login_History = "CREATE TABLE IF NOT EXISTS USER_LOGIN_HISTORY(
    Id BIGINT(50) NOT NULL AUTO_INCREMENT,
    Username VARCHAR(25) NOT NULL,
    login_time DATETIME NOT NULL,
    IP VARCHAR(255) NOT NULL,
    IP2 VARCHAR(255) NOT NULL,
    PRIMARY KEY(Id),
    FOREIGN KEY (Username) REFERENCES USER_CREDS(Username))";
$query = mysqli_query($db_conx, $tbl_Login_History);
if($query === TRUE){
    echo "<h3>USER_LOGIN_HISTORY table created ok :) </h3>";
} else {
    echo "<h3>USER_LOGIN_HISTORY table NOT created :( </h3>";
}