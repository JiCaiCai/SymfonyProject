<?php

class StudentPeer extends BaseStudentPeer
{
	/**
	 * 学生表左连接教室表
	 * @param Criteria $c
	 * @param string $con
	 */
// 	public static function doSelectJoinTeacher(Criteria $c, $con = null)
// 	{
// 		$c->addJoin(self::TEACHER_ID, TeacherPeer::ID, Criteria::LEFT_JOIN);
// 		$stmt = self::doSelect($c);
		
// // 		var_dump($stmt);
		
// 		$result = array();
		
// 		foreach ($stmt as $row) {
// 			// 学生表化合
// 			$student = new Student();
// 			$student->hydrate($row);
				
// 			$result[] = $student;
// 		}
// 		return $result;
// 	}
}
