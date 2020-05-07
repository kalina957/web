import { Component, OnInit, Input } from '@angular/core';
import { Employee } from '../employee';
import { Department } from '../departments/department';

@Component({
  selector: 'app-set-department',
  templateUrl: './set-department.component.html',
  styleUrls: ['./set-department.component.css']
})
export class SetDepartmentComponent implements OnInit {

  constructor() { }
  
  @Input() selectedEmployee: Employee;
  @Input() selectedDepartment: Department ;
  ngOnInit() {
  }

}
