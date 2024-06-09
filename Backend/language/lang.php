<?php
    
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';

    if ($lang == "th") {
        $print = "พิมพ์";
        $index = "หน้าหลัก";
        $policy = "ข้อตกลงการใช้งาน";
        $profile = "โปรไฟล์";
        $Setup = "ตั้งค่า";
        $VerifyEmail = "ยืนยันอีเมล์";
        $VerifyPass = "ยืนยันรหัสผ่าน";
        $frm_dept = "ข้อมูลแผนกวิชา";
        $frm_faculty = "ข้อมูลคณะ";
        $frm_ins = "ข้อมูลสถานศึกษา";
        $frm_major = "ข้อมูลสาขาวิชา";
        $frm_manual = "ข้อมูลเอกสารแบบฟอร์ม";
        $frm_project = "ข้อมูลโครงงาน";
        $frm_request = "ข้อมูลการแจ้งปัญหา";
        $frm_user = "ข้อมูลผู้ใช้";
        $dash_favorite = "รายการโปรด";
        $setting = "ตั้งค่า";
        $delete_manual = "ลบเอกสาร";
        $edit_file = "แก้ไขไฟล์";
        $manual = "แบบฟอร์มและคู่มือ";
        $dash_manual = "แบบฟอร์มและคู่มือ";
        $manual_list = "รายการแบบฟอร์มและคู่มือ";
        $create_manual = "เพิ่มเอกสาร";
        $update_manual = "แก้ไขเอกสาร";
        $this_email_address_is_already = "มีอีเมล์นี้ในระบบแล้ว";
        $dash_approve = "อนุมัติ";
        $pdf_only = "(เฉพาะ PDF)";
        $wait_verify = "รอตรวจสอบ";
        $at = "ที่";
        $in = "ใน";
        $has = "มี";
        $edit_project_pic = "แก้ไขรูปภาพ";
        $update_project_cover = "แก้ไขภาพหน้าปก";
        $publisher = "ผู้อนุมัติ";
        $abstract = "บทคัดย่อ";
        $access = "ยอมรับ";
        $account = "บัญชี";
        $addfavorite = "เพิ่มเข้ารายการโปรด";
        $admin = "ผู้ดูแล";
        $advisor = "ที่ปรึกษา";
        $approve = "อนุมัติ";
        $approve_dashboard = "อนุมัติ";
        $approve_list = "รายการอนุมัติ";
        $approve_menu_detail = "รายการขออนุมัติโครงงาน";
        $approve_requests = "คำขออนุมัติโครงงาน";
        $approver = "ผู้อนุมัติ";
        $author = "ผู้เขียน";
        $back = "ย้อนกลับ";
        $back_to_sign_in = "กลับไปหน้าลงทะเบียน?";
        $back_to_signup = "กลับไปยังหน้าสมัครสมาชิก";
        $cancel = "ย้อนกลับ";
        $confirm_password = "ยืนยันรหัสผ่าน";
        $contact_us = "ติดต่อเรา";
        $contact_us_detail = "แจ้งปัญหาการใช้งาน";
        $continue = "ดำเนินการต่อ";
        $create = "สร้าง";
        $create_account = "สมัครสมาชิก";
        $create_account_detail = "โปรดทราบว่าจำเป็นต้องมีการยืนยันอีเมลเพื่อสมัคร อีเมลของคุณจะถูกใช้เพื่อยืนยันตัวตนของคุณเพื่อความปลอดภัยเท่านั้น";
        $created_at = "สร้างเมื่อ";
        $create_department = "สร้างแผนก";
        $create_faculty = "สร้างคณะ";
        $create_institute = "สร้างสถานศึกษา";
        $create_major = "สร้างสาขาวิชา";
        $create_new_user = "สร้างผู้ใช้ใหม่";
        $create_project = "สร้างโครงงาน";
        $create_project_type = "สร้างประเภทโครงงาน";
        $create_request = "แจ้งปัญหา";
        $dash_department = "แผนกวิชา";
        $dash_faculty = "คณะ";
        $dash_institute = "สถานศึกษา";
        $dash_major = "สาขาวิชา";
        $dash_project = "โครงงาน";
        $dash_project_type = "ประเภทโครงงาน";
        $dash_request = "แจ้งปัญหา";
        $dash_user = "ผู้ใช้";
        $degree = "วุฒิการศึกษา";
        $delete = "ลบ";
        $delete_account = "ลบบัญชี";
        $delete_department = "ลบแผนก";
        $delete_faculty = "ลบคณะ";
        $delete_institute = "ลบสถานศึกษา";
        $delete_major = "ลบสาขาวิชา";
        $delete_project = "ลบโครงงาน";
        $delete_project_type = "ลบประเภทโครงงาน";
        $delete_request = "ลบรายการแจ้งปัญหา";
        $department = "แผนกวิชา";
        $department_dashboard = "แผนกวิชา";
        $department_list = "รายการแผนกวิชา";
        $department_menu_detail = "จัดการรายการแผนกวิชาทั้งหมด";
        $dept = "แผนกวิชา";
        $detail = "รายละเอียด";
        $Don_t_have_an_account = "ไม่มีบัญชี?";
        $download = "ดาวน์โหลดไฟล์";
        $draft = "ร่าง";
        $edit_detail = "แก้ไขรายละเอียด";
        $edit_picture = "แก้ไขรูปภาพ";
        $edit_project_detail = "แก้ไขรายละเอียดโครงงาน";
        $edit_project_file = "แก้ไขไฟล์โครงงาน";
        $email = "อีเมล์";
        $email_not_found_in_the_system = "ไม่มีผู้ใช้อีเมล์นี้ในระบบ";
        $faculty = "คณะ";
        $faculty_dashboard = "คณะ";
        $faculty_label = "คณะ";
        $faculty_list = "รายชื่อคณะ";
        $faculty_menu_detail = "จัดการรายการคณะทั้งหมด";
        $favorite = "รายการโปรด";
        $file = "ไฟล์โครงงาน";
        $forget_your_password = "ลืมรหัสผ่าน?";
        $home = "หน้าหลัก";
        $insert = "สร้าง";
        $institute = "สถานศึกษา";
        $institute_dashboard = "สถานศึกษา";
        $institute_list = "รายชื่อสถานศึกษา";
        $institute_menu_detail = "จัดการรายการสถานศึกษาทั้งหมด";
        $last_update = "แก้ไขล่าสุด";
        $login = "เข้าระบบ";
        $major = "สาขาวิชา";
        $major_and_degree = "สาขาวิชาและ วุฒิการศึกษา";
        $major_and_degree_menu_detail = "จัดการรายการสาขาวิชาและ วุฒิการศึกษาทั้งหมด";
        $major_dashboard = "สาขาวิชา";
        $major_list = "รายชื่อสาขาวิชา";
        $management_your_project = "จัดการรายการโครงงานของฉัน";
        $my_favorite = "รายการโปรดของฉัน.";
        $my_project = "โครงงานของฉัน";
        $name = "ชื่อ";
        $new_password = "รหัสผ่านใหม่";
        $no_data = "ไม่มีข้อมูล";
        $normal_user = "ผู้ใช้ทั่วไป";
        $not_approve = "ไม่อนุมัติ";
        $not_approve_detail = "รายละเอียดการไม่อนุมัติ";
        $note = "หมายเหตุ";
        $officer = "เจ้าหน้าที่";
        $open_collections = "Open Collections";
        $other = "อื่น ๆ";
        $password = "รหัสผ่าน";
        $please_sign_in = "กรุณาเข้าสู่ระบบ";
        $please_select_advisor = "กรุณาเลือกที่ปรึกษา";
        $please_select_approver = "กรุณาเลือกผู้อนุมัติ";
        $please_select_dept = "กรุณาเลือกแผนกวิชา";
        $please_select_faculty = "กรุณาเลือกคณะ";
        $please_select_ins = "กรุณาเลือกสถานศึกษา";
        $please_select_major = "กรุณาเลือกสาขาวิชา";
        $please_select_project_type = "กรุณาเลือกประเภทโครงงาน";
        $policy = "ข้อตกลงการใช้งาน";
        $policy_1 = "1. การให้ข้อมูลส่วนตัว";
        $policy_11 = "1.1 ผู้ใช้ตกลงที่จะให้ข้อมูลส่วนตัวที่ถูกต้องและครบถ้วนตามที่ระบบต้องการในขั้นตอนการลงทะเบียนหรือการใช้งานระบบที่เกี่ยวข้อง";
        $policy_12 = "1.2 ผู้ใช้รับทราบว่าการเผยแพร่งานวิจัยอาจทำให้ข้อมูลและผลงานวิจัยของตนเปิดเผยแก่สาธารณะ และผู้ใช้ยินยอมรับผิดชอบในการเผยแพร่งานวิจัยดังกล่าว";
        $policy_2 = "2. การเผยแพร่งานวิจัย";
        $policy_21 = "2.1 ผู้ใช้ตกลงที่จะให้สิทธิ์ให้ระบบเผยแพร่งานวิจัยที่ผู้ใช้สร้างขึ้นสู่สาธารณะ";
        $policy_22 = "2.2 ผู้ใช้รับทราบว่าการเผยแพร่งานวิจัยอาจทำให้ข้อมูลและผลงานวิจัยของตนเปิดเผยแก่สาธารณะ และผู้ใช้ยินยอมรับผิดชอบในการเผยแพร่งานวิจัยดังกล่าว";
        $policy_3 = "3. การอำนาจในการแก้ไขโดยไม่แจ้งล่วงหน้า";
        $policy_31 = "3.1 ผู้ใช้ตกลงและยอมรับว่าหน่วยงานหรือผู้ให้บริการอาจมีสิทธิ์แก้ไขหรือแก้ไขข้อมูลที่เกี่ยวข้องกับงานวิจัยของผู้ใช้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า";
        $policy_32 = "3.2 ผู้ใช้รับทราบว่าการแก้ไขโดยไม่แจ้งล่วงหน้าอาจมีผลกระทบต่องานวิจัยและข้อมูลที่เกี่ยวข้อง และผู้ใช้ยินยอมรับผิดชอบในผลที่เกิดขึ้นจากการแก้ไขดังกล่าว";
        $policy_4 = "4. ความรับผิดชอบ";
        $policy_41 = "4.1 ผู้ใช้รับทราบและยินยอมว่าผู้ให้บริการไม่รับผิดชอบต่อความเสียหายที่เกิดขึ้นจากการใช้งานระบบหรือการเผยแพร่งานวิจัย";
        $policy_42 = "4.2 ผู้ใช้รับทราบและยินยอมว่าผู้ให้บริการไม่รับประกันความถูกต้อง ความสมบูรณ์ ความน่าเชื่อถือ หรือประสิทธิภาพของข้อมูลหรืองานวิจัยที่เผยแพร่ผ่านระบบ";
        $policy_end = "โดยที่ผู้ใช้เข้าใจและยอมรับข้อตกลงดังกล่าว การใช้งานระบบถือว่าเป็นการยินยอมและยอมรับข้อตกลงและข้อกำหนดทั้งหมดที่ระบบกำหนด";
        $policy_sub = "โดยเข้าถึงและใช้งานระบบ Open Collections (ต่อไปนี้จะเรียกว่า 'ระบบ') ซึ่งจัดทำโดย [ชื่อบริษัท/หน่วยงาน] (ต่อไปนี้จะเรียกว่า 'ผู้ให้บริการ') ผู้ใช้งาน (ต่อไปนี้จะเรียกว่า 'ผู้ใช้') ต้องทำการยินยอมและปฏิบัติตามข้อตกลงดังต่อไปนี้:";
        $policy_title = "ข้อตกลงการใช้งานระบบ Open Collections";
        $profile_picture = "ภาพโปรไฟล์";
        $project = "โครงงาน";
        $project_dashboard = "โครงงาน";
        $project_list = "รายการโครงงาน";
        $project_menu_detail = "จัดการรายการโครงงานทั้งหมด";
        $project_type = "ประเภทโครงงาน";
        $project_type = "ประเภทโครงงาน";
        $project_type_dashboard = "ประเภทโครงงาน";
        $project_type_list = "รายการประเภทโครงงาน";
        $project_type_menu_detail = "จัดการรายการประเภทโครงงานทั้งหมด";
        $release = "เผยแพร่";
        $release_date = "วันที่เผยแพร่";
        $request = "แจ้งปัญหา";
        $request_dashboard = "แจ้งปัญหา";
        $request_list = "รายการแจ้งปัญหา";
        $request_menu_detail = "จัดการรายการแจ้งปัญหาทั้งหมด";
        $request_user = "แจ้งปัญหาทั้งหมด";
        $reset_your_password = "รีเซ็ตรหัสผ่านของคุณ";
        $reset_your_password_detail = "กรอกที่อยู่อีเมลของคุณ ทางเราจะดำเนินการส่งคำแนะนำในการรีเซ็ตรหัสผ่านไปให้คุณ";
        $role = "บทบาท";
        $search_some_thing = "ค้นหาบางสิ่ง...";
        $sent = "ขออนุมัติเผยแพร่โครงงาน";
        $setting = "ตั้งค่า";
        $sign_in = "เข้าสู่ระบบ";
        $sign_out = "ออกจากระบบ";
        $sign_out_your_account = "ออกจากระบบบัญชีของฉัน";
        $sign_up = "สมัครสมาชิกเลย";
        $status = "สถานะ";
        $support = "สนับสนุน";
        $tel = "เบอร์โทรศัพท์";
        $title = "ชื่อเรื่อง";
        $total_user = "ผู้ใช้ทั้งหมด";
        $type = "ประเภท";
        $unfavorite = "ลบออกจากรายการโปรด";
        $update = "แก้ไข";
        $update_department = "แก้ไขแผนก";
        $update_email = "แก้ไขอีเมล์";
        $update_faculty = "แก้ไขคณะ";
        $update_institute = "แก้ไขสถานศึกษา";
        $update_major = "แก้ไขสาขาวิชา";
        $update_password = "แก้ไขรหัสผ่าน";
        $update_project = "แก้ไขโครงงาน";
        $update_project_file = "แก้ไขไฟล์โครงงาน";
        $update_project_type = "แก้ไขประเภทโครงงาน";
        $update_role = "แก้ไขบทบาทผู้ใช้";
        $update_tel = "แก้ไขเบอร์โทรศัพท์";
        $update_username = "แก้ไขชื่อผู้ใช้";
        $user = "ผู้ใช้";
        $user_dashboard = "ผู้ใช้";
        $user_list = "รายชื่อผู้ใช้";
        $user_menu_detail = "จัดการรายการผู้ใช้ทั้งหมด";
        $username = "ชื่อผู้ใช้";
        $username_email = "ชื่อผู้ใช้ / อีเมล์";
        $verification = "การยืนยันตัวตน";
        $verification_detail = "กรุณาตรวจสอบกล่องข้อความในบัญชีอีเมล์ของท่าน";
        $verify = "รหัสยืนยัน";
        $verify_email = "ยืนยันอีเมล์";
        $view = "อ่าน";
        $wait = "รออนุมัติ";
        $welcome_back = "เข้าสู่ระบบ";
        $you_ll_lose_your_information = "ข้อมูลทั้งหมดของคุณจะถูกลบ";
        $your_account = "บัญชี";
    } else if ($lang == "en") {
        $print = "Print";
        $index = "Home";
        $policy = "Policy";
        $profile = "Profile";
        $Setup = "Setup";
        $VerifyEmail = "Verify Email";
        $VerifyPass = "Verify Password";
        $frm_dept = "Department";
        $frm_faculty = "facultyะ";
        $frm_ins = "Institute";
        $frm_major = "Major";
        $frm_manual = "Manual";
        $frm_project = "Project";
        $frm_request = "Request";
        $frm_user = "User";
        $dash_favorite = "Favorite";
        $setting = "Setting";
        $delete_manual = "Delete Manual";
        $edit_file = "Update File";
        $manual = "Manual";
        $dash_manual = "Manual";
        $manual_list = "List Manual";
        $update_manual = "Update Manual";
        $this_email_address_is_already = "This email address is already.";
        $dash_approve = "Approve";
        $pdf_only = "(PDF Only.)";
        $wait_verify = "Wait Verification";
        $at = "at";
        $in = "in";
        $has = "has";
        $edit_project_pic = "Edit Project Picture";
        $update_project_cover = "Update Project Cover.";
        $publisher = "Publisher";
        $abstract = "Abstract";
        $access = "Access";
        $account = "Account";
        $addfavorite = "Favorite";
        $admin = "Admin";
        $advisor = "Advisor";
        $approve = "Approve";
        $approve_dashboard = "Approve Dashboard";
        $approve_list = "Approve List";
        $approve_menu_detail = "approve requests.";
        $approve_requests = "approve requests.";
        $approver = "Approver";
        $author = "Author";
        $back = "Back";
        $back_to_sign_in = "Back to sign in?";
        $back_to_signup = "Back to signup";
        $cancel = "Back";
        $confirm_password = "Confirm Password";
        $contact_us = "Contact Us";
        $contact_us_detail = "Contact Us.";
        $continue = "Continue";
        $create = "Create";
        $create_account = "Create account";
        $create_account_detail = "Please note that Email verification is required for Signup. Your Email will only be used to verify your identity for security purposes.";
        $created_at = "Created at";
        $create_department = "Create Department";
        $create_faculty = "Create Faculty";
        $create_institute = "Create Institute";
        $create_major = "Create Major";
        $create_new_user = "Create New User";
        $create_project = "Create Project";
        $create_project_type = "Create Project Type";
        $create_request = "Create Request";
        $dash_department = "Department";
        $dash_faculty = "Faculty";
        $dash_institute = "Institute";
        $dash_major = "Major";
        $dash_project = "Project";
        $dash_project_type = "Project Type";
        $dash_request = "Request";
        $dash_user = "User";
        $degree = "Degree";
        $delete = "Delete";
        $delete_account = "Delete account";
        $delete_account = "Delete Account";
        $delete_department = "Delete Departmenft";
        $delete_faculty = "Delete Faculty";
        $delete_institute = "Delete Institute";
        $delete_major = "Delete Major";
        $delete_project = "Delete Project";
        $delete_project_type = "Delete Project Type";
        $delete_request = "delete Request";
        $department = "Department";
        $department_dashboard = "Department Dashboard";
        $department_list = "Department List";
        $department_menu_detail = "Manage all department.";
        $dept = "Department";
        $detail = "Detail";
        $Don_t_have_an_account = "Don't have an account?";
        $download = "Download";
        $draft = "Draft";
        $edit_detail = "Edit Detail";
        $edit_picture = "Edit Picture";
        $edit_project_detail = "Edit Project Detail";
        $edit_project_file = "Edit File";
        $email = "Email";
        $email_not_found_in_the_system = "Email not found in the system.";
        $faculty = "Faculty";
        $faculty_dashboard = "Faculty Dashboard";
        $faculty_label = "Faculty";
        $faculty_list = "Faculty List";
        $faculty_menu_detail = "Manage all faculty.";
        $favorite = "Favorite";
        $file = "File";
        $create_manual = "Created manual";
        $forget_your_password = "Forget your password?";
        $home = 'Home';
        $insert = "Insert";
        $institute = "Institute";
        $institute_dashboard = "Institute Dashboard";
        $institute_list = "Institute List";
        $institute_menu_detail = "Manage all institute.";
        $last_update = "Last Update";
        $login = 'Login';
        $major = "Major";
        $major_and_degree = "Major and degree";
        $major_and_degree_menu_detail = "Manage all major.";
        $major_dashboard = "Major Dashboard";
        $major_list = "Major List";
        $management_your_project = "Management your project.";
        $my_favorite = "My favorite.";
        $my_project = "My Project";
        $name = "Name";
        $new_password = "New Password";
        $no_data = "No Data";
        $normal_user = "Normal User";
        $not_approve = "Not";
        $not_approve_detail = "Not Approve Detail";
        $note = "Note";
        $officer = "Officer";
        $open_collections = "Open Collections";
        $other = "Other";
        $password = "Password";
        $please_sign_in = "Please sign in.";
        $please_select_advisor = "Please select Advisor";
        $please_select_approver = "Please select Approver.";
        $please_select_dept = "Please select Department";
        $please_select_faculty = "Please select Faculty";
        $please_select_ins = "Please select Institute";
        $please_select_major = "Please select Major";
        $please_select_project_type = "Please select Project type";
        $policy = "Policy";
        $policy_1 = "1. Providing personal information";
        $policy_11 = "1.1 The user agrees to provide accurate and complete personal data as required by the system during registration or use of the relevant system.";
        $policy_12 = "1.2 Users acknowledge that publishing research may cause their data and research results to be made public. and the user accepts responsibility for publishing such research";
        $policy_2 = "2. Publication of research";
        $policy_21 = "2.1 The user agrees to grant permission for the system to publish user-generated research to the public.";
        $policy_22 = "2.2 Users acknowledge that publishing research may make their data and research results available to the public. and the user accepts responsibility for publishing such research";
        $policy_3 = "3. Authority to make changes without prior notice";
        $policy_31 = "3.1 The user agrees and accepts that the agency or service provider may have the right to edit or modify data related to the user's research without prior notice.";
        $policy_32 = "3.2 The user acknowledges that modifications without prior notice may affect the research and related information. and the user accepts responsibility for the results arising from such modifications";
        $policy_4 = "4. Responsibility";
        $policy_41 = "4.1 The user acknowledges and agrees that the service provider is not responsible for damages arising from the use of the system or the dissemination of research.";
        $policy_42 = "4.2 The user acknowledges and agrees that the service provider does not guarantee the accuracy, completeness, reliability. or the efficiency of information or research published through the system";
        $policy_end = "where the user understands and accepts the said agreement. Using the system is considered consent and acceptance of all terms and conditions set forth by the system.";
        $policy_sub = "By accessing and using the Open Collections system (hereinafter referred to as the 'System') provided by [company/organization name] (hereinafter referred to as the 'System'), The user (hereinafter referred to as the 'Service Provider') must agree to and abide by the following terms:";
        $policy_title = "Open Collections Terms of Use";
        $profile_picture = "Profile Picture";
        $project = "Project";
        $project_dashboard = "Project Dashboard";
        $project_list = "Project List";
        $project_menu_detail = "Manage all project.";
        $project_type = "Project Type";
        $project_type = "Project type";
        $project_type_dashboard = "Project Type Dashboard";
        $project_type_list = "Project Type List";
        $project_type_menu_detail = "Manage all project type.";
        $release = "Release";
        $release_date = "Release Date";
        $request = "Request";
        $request_dashboard = "Request Dashboard";
        $request_list = "Request List";
        $request_menu_detail = "Manage all request.";
        $request_user = "Total Request";
        $reset_your_password = "Reset Your password";
        $reset_your_password_detail = "Enter your email address and we will send you instructions to reset your password.";
        $role = "Role";
        $search_some_thing = "Search some thing...";
        $setting = "Setting";
        $sent = "Sent";
        $sign_in = "Sign In";
        $sign_out = "Sign Out";
        $sign_out_your_account = "Sign out your account.";
        $sign_up = "Sign up";
        $status = "Status";
        $support = "Support";
        $tel = "Tel.";
        $title = "Title";
        $total_user = "Total user";
        $type = "Type";
        $unfavorite = "Unfavorite";
        $update = "Update";
        $update_department = "Update Department";
        $update_email = "Update Email";
        $update_faculty = "Update Faculty";
        $update_institute = "Update Institute";
        $update_major = "Update Major";
        $update_password = "Update Password";
        $update_project = "Update Project";
        $update_project_file = "Update Project File";
        $update_project_type = "Update Project Type";
        $update_role = "Update Role";
        $update_tel = "Update Tel.";
        $update_username = "Update Username";
        $user = "User";
        $user_dashboard = "User Dashboard";
        $user_list = "User List";
        $user_menu_detail = "Manage all user.";
        $username = "Username";
        $username_email = "Username / Email";
        $verification = "Verification";
        $verification_detail = "Please check your email.";
        $verify = "Verify Code";
        $verify_email = "Verify Email";
        $view = "View";
        $wait = "Wait";
        $welcome_back = "Login";
        $you_ll_lose_your_information = "You'll lose your, information.";
        $your_account = "Account";
    }
?>