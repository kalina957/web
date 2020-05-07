import { Directive, Input } from '@angular/core';
import { Employee } from './employee';

@Directive({
  selector: '[appEmployees]'
})
export class EmployeesDirective {

  constructor() { }

  @Input('appEmployees') selectedDepartment: Employee;
}
