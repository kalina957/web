import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filterEmployeePipe'
})
export class FilterEmployeePipe implements PipeTransform {

  transform(items: any[], searchText: string): any[] {

    if (!items) {
      return [];
    }
    if (!searchText) {
      return items;
    }
    searchText = searchText.toLocaleLowerCase();

    return items.filter(it => {
      return it.first_name.toLocaleLowerCase().includes(searchText);
    });
  }
}
