<?php

namespace Model\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dept_emp")
 * @property-read \DateTime $fromDate
 * @property-read \DateTime $toDate
 */
class DepartmentEmployee
{

	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Employee", inversedBy="affiliatedDepartments")
	 * @ORM\JoinColumn(name="emp_no", referencedColumnName="emp_no", nullable=false)
	 * @var Employee
	 */
	protected $employee;

	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Department")
	 * @ORM\JoinColumn(name="dept_no", referencedColumnName="dept_no", nullable=false)
	 * @var Department
	 */
	protected $department;

	/**
	 * @ORM\Column(type="date", name="from_date")
	 * @var DateTime
	 */
	protected $fromDate;

	/**
	 * @ORM\Column(type="date", name="to_date")
	 * @var DateTime
	 */
	protected $toDate;

	/**
	 * @return Employee
	 */
	public function getEmployee()
	{
		return $this->employee;
	}

	/**
	 * @return Department
	 */
	public function getDepartment()
	{
		return $this->department;
	}

	/**
	 * @return DateTime
	 */
	public function getFromDate()
	{
		return $this->fromDate;
	}

	/**
	 * @return DateTime
	 */
	public function getToDate()
	{
		return $this->toDate;
	}

}
