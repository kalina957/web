import { Component, OnInit } from '@angular/core';
import { Department } from './department';
import { FormControl, Validators, FormGroup } from '@angular/forms';
import { DepartmentService } from './department.service';
import { EmployeeService } from '../employee.service';
import {Employee} from '../employee';
import{ HttpHeaderResponse, HttpHeaders } from '@angular/common/http'

// import { GridApi } from 'ag-grid-community/main';
// import { GridOptions, RowNode } from 'ag-grid-community/main';


@Component({
  selector: 'app-departments',
  templateUrl: './departments.component.html',
  styleUrls: ['./departments.component.css']
})

export class DepartmentsComponent implements OnInit {


  txtDepartment;
  departmentsList = [];
  employees=[];
  number;
  deleted:boolean=false

  form = new FormGroup({ depName : new FormControl('',Validators.compose(
    [Validators.minLength(5), Validators.required,Validators.maxLength(25)]))});
    //two validators, array

  constructor(private _departmentService:DepartmentService,private employeeService: EmployeeService) { }
  ngOnInit() {
    this._departmentService.getDepartments().subscribe(dep=>{this.departmentsList=dep;});
    this._departmentService.getEmployees().subscribe(e=>{this.employees=e;});

    }

addDepartment(){  
  var depart = new Department(this.number,this.txtDepartment)
   this._departmentService.addNewDepartment(depart).subscribe(()=>this.UpdateList());
}
removeDepartment(depart:Department)
{
  if(depart!=null)
  {
       var userselection = confirm("Are you sure you want to delete "+depart.name + " ?");
            if (userselection == true)
             {
               this._departmentService.removeDeparment(depart).subscribe(()=>{this.UpdateList();});      
               //alert("Deleted department!");
             }
  }
  else
  {
    alert("Please, select department!");
  }
}

/////////////////////////////////////////////  Departments,Departments

     getSelectedDep(dep:Department):Department
     {
      return this._departmentService.getSelectedDepartment(dep);
     }
     get depName() {
      return this.form.get('depName');
    }
     UpdateList()
     {
      this._departmentService.getDepartments().subscribe(dep=>{this.departmentsList=dep;console.log("List updated!")});
     }
     SortByName()
     {
      this._departmentService.getDepartments().subscribe(dep=>{this.departmentsList=dep;dep.sort((a,b) => a.name.localeCompare(b.name))});
     }
     close(dep:Department){
      dep = null;
    }
    }
