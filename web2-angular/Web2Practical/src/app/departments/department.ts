import {Employee} from '../employee'

export class Department {
  id: number;
  name: string;
  employees: Employee[];
  constructor(idDep:number,nameDep:string)
  {
    this.id=idDep;
    this.name=nameDep;
    this.employees=[];
  }
  //  AddEmployee(em:Employee)
  // {   
  //     if(!this.employees.includes(em) && em!=null)
  //     {
  //       this.employees.push(em);
  //     }
  //     else
  //   {
  //     alert("Cannot add employee second time")
  //     console.log("DO THIS WITH FOR LOOP")
  //   }
  // }
  //  getEmployeesAtDepartment()
  // {
  //   if(this.employees!=[])
  //   {
  //  return this.employees;
  //   }
  // }
}



