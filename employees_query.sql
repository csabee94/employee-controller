SELECT
	CONCAT(e.first_name,' ',e.last_name) as emp_name,
    e.birth_date,
	(CASE WHEN
		e.gender = 'M' THEN 'Male'
	ELSE
		'Female'
	END) as gender,
	e.hire_date,
	t.title,
	d.dept_name,
	s.salary,
	e.emp_no
FROM
	employees e
JOIN
	current_dept_emp cde
ON
	e.emp_no = cde.emp_no
JOIN
	departments d
ON
	cde.dept_no = d.dept_no
JOIN
	salaries s
ON
	e.emp_no = s.emp_no AND s.to_date = cde.to_date
JOIN
	titles t
ON
	e.emp_no = t.emp_no AND t.to_date = cde.to_date
LIMIT 100