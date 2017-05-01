import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'SearchsobaPipe'
})

export class SearchsobaPipe {

    transform(value: Object[], anotherValue: string): Object[] {
      if (value == null) {
        return null;
      }

      if (anotherValue !== undefined) {
        return value.filter((item: Object) =>
        item["brojKreveta"].toLowerCase().indexOf(anotherValue.toLowerCase()) !== -1);
      } else {
        return value;
      }
    }
}
