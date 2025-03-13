SELECT C.type,COUNT(*) AS q 
FROM  lime_answer_l10ns AS A
JOIN lime_answers as B
ON A.aid = B.aid
JOIN lime_questions AS C
ON C.qid=B.qid
GROUP BY (C.type)


type;q
!;12796
1;4365
F;4760
L;5299
R;51
