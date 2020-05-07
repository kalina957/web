import { Component, OnInit } from '@angular/core';
import{Department} from '../department';



export var EXTERNALDEPARTMENTS:Department[] = [new Department(8016,'Management accounting'),
new Department(2,"Corporate department"),
new Department(3,"Solutions department"),
new Department(4,"Technical department")];



@Component({
  selector: 'app-ext-departments',
  templateUrl: './ext-departments.component.html',
  styleUrls: ['./ext-departments.component.css']
})
export class ExtDepartmentsComponent implements OnInit {
  departments =[];

  constructor() { }
  ngOnInit() {
   
}
}


