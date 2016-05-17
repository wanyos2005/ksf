<?php
New pledges
 1. create 2 tables tbl_new_pledges and tbl_new_pldege_payments
 2. import the excel sheet with list of people who have pledged
 3. tbl_new_pldege_payments ---id,amount,
 4. update codes from old pldeges
 5. FindAll in newpldeges with no code then inseert in hcpartners generating codes then update newpdleges


 Fior new members with no codes
 			-insert into hcpartners from new pledges
 					INSERT INTO tbl_hc_partners (`code`,`name`,`phone`,`amountpledged`) SELECT `code`, `name`, `contact`, `totalpldege` FROM tbl_new_pledges WHERE `code`=''
 					update `tbl_hc_partners` set code=concat('HC',id) WHERE `code`='' 

 			-update new_pledges from hcpartners
 			-create a screen to capture payments in to tbl_new_pldege_payments
 			-create screen to search member using phone or name, display name ,phonr and amount
 			- when the rec is found click on the name to see paid amount then a text box to enter new amount
