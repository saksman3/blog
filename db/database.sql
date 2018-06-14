create table posts (postId varchar(5) primary key,postHeading varchar(20),post varchar(500),tagId varchar(3),postDate date("dd-mm-ccyy"));
create table comments(commentID int(4) AUTO_INCREMENT PRIMARY KEY,comment varchar(400),commentDate datetime ,userId int(4),CONSTRAINT userid_fk FOREIGN KEY(userId) REFERENCES users(userId));

  --insert data into tags table
INSERT into tags(tagdesc,tagName) VALUES('Hyper text markup language used for creating websites.','HTML');
INSERT into tags(tagdesc,tagName) VALUES('Cascading styled sheets used for styling websites.','CSS');
INSERT into tags(tagdesc,tagName) VALUES('Used for multi technologies including websites and data analytics','Python');

--insert a row into post table
INSERT INTO posts(post,postDate,postHeading,tagId)
VALUES ('Sakhile is a dedicated web developer ho is determined for solving users problems that they possible never knew they had in a way they do not understand',NOW(),'Sakhile a dedicated programmer',1);
--query for selecting a post and a tags
select p.postHeading,p.postDate,p.postDate,t.tagName FROM posts p,tags t where p.tagId = t.tagId
