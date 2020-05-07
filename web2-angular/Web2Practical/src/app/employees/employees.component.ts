import { Component, OnInit, Input } from '@angular/core';
import {Employee} from '../employee';
import {Employees} from '../mock-employees';
import { EmployeeService } from '../employee.service';
import { FormGroup } from '@angular/forms';
import { EXTERNALDEPARTMENTS } from '../departments/ext-departments/ext-departments.component';
import {  Department } from '../departments/department'; 
import { Task } from '../task';
import {TaskServiceService} from '../task-service.service';
import { Alert } from 'selenium-webdriver';
import { DepartmentService } from '../departments/department.service';


@Component({
  selector: 'app-employees',
  templateUrl: './employees.component.html',
  styleUrls: ['./employees.component.css']
})
export class EmployeesComponent implements OnInit {
  

 departments;
 tasks;
 selectedDepartment:Department ;
 employees : Employee[];
 txtEmployeeFirstName;
 txtEmployeeLastName;
 txtEmployeeBirthDate;
 txtEmployeeDepartmentId;
 checkEmployee: boolean = false;
 selectedEmployee:Employee ;
 searchEmployee:string;
 form = new FormGroup({
   
 });

  constructor(private employeeService: EmployeeService,private _departmentService:DepartmentService) { }

  ngOnInit() {
    this.employeeService.getEmployees().subscribe(empl => this.employees = empl);
    this.employeeService.getDepartments().subscribe(dep => this.departments = dep);
    this.employeeService.getTasks().subscribe(t => this.tasks = t);
  }

  addEmpForm : FormGroup;
  formEdit: FormGroup;

  onSelect(employee:Employee): void 
  {
    this.selectedEmployee = employee;
    this._departmentService.sharedDepartment=null;
  }
  getSelectedDep():Department
  {
   return this._departmentService.sharedDepartment;
  }
  
  public deleteEmployee(){
    this.employeeService.deleteEmployee(this.selectedEmployee).subscribe();

    this.selectedEmployee = null;
    window.location.reload();
  }
  addEmployee(){

  this.employees.push(new Employee(this.selectedDepartment.id,this.txtEmployeeFirstName, this.txtEmployeeLastName ,this.txtEmployeeBirthDate));
  this.employeeService.
  addEmployee({department_id:this.selectedDepartment.id,first_name:this.txtEmployeeLastName,last_name:this.txtEmployeeLastName,birth_date:this.txtEmployeeBirthDate} as Employee)
  .subscribe();
  }

  removeEmployee(employee:Employee)
{
  const index: number = this.employees.indexOf(employee);
  if (index !== -1) {
      employee.first_name = "unknown";
      employee.last_name ="unknown"; 
      employee.birth_date = "unknown";
      employee.department_id =null;
      employee.id=null;
        this.employees.splice(index, 1);
  }
}

addEmployeeCheck(){
  this.checkEmployee = !this.checkEmployee;
  
}
// getEmployees(): void {
//   this.employeeService.getEmployees()
//       .subscribe(employees => this.employees = employees);
// }

setDepartment(department:Department):void {
  this.selectedDepartment = department;
};
setDepartmentToEmployee(){
  this.selectedEmployee.department_id = this.selectedDepartment.id;
}
UpdateList()
{
 this.employeeService.getEmployees().subscribe(emp=>{this.employees=emp;console.log("List updated!")});
}
SortByName()
{
 this.employeeService.getEmployees().subscribe(emp=>{this.employees=emp;emp.sort((a,b) => a.first_name.localeCompare(b.first_name))});
}
}
