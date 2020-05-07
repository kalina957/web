import { Component, OnInit, Input } from '@angular/core';
import { Department } from '../department';
import{DepartmentService} from '../department.service'
import { FormControl, Validators, FormGroup } from '@angular/forms';
import { Employee } from 'src/app/employee';

@Component({
  selector: 'app-department-details',
  templateUrl: './department-details.component.html',
  styleUrls: ['./department-details.component.css']
})
export class DepartmentDetailsComponent implements OnInit {


  @Input() department: Department;
  employees:Employee[];
  constructor(private _departmentService:DepartmentService) {

   }

  form = new FormGroup({ depName : new FormControl('',Validators.compose(
    [Validators.minLength(5), Validators.required,Validators.maxLength(25)]))});

  ngOnInit() {

  }
  
  updateDepartment() {
    this._departmentService.updateDepartment(this.department,this.form.value.depName).subscribe();
  }
  getEmployeesDepartment():Employee[]
{
  return this._departmentService.employeesForDepartment;
}
  get depName() 
  {
    return this.form.get('depName');
  }
  }