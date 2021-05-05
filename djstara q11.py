def next_vertex(in_tree, distance):
    """Returns the next vertex to be added."""
    places = [] 
    for i, j in enumerate(in_tree): 
        if j is not True:
            places.append(i) 
           
    position = places[0]
    for i in places: 
        if distance[i] <  distance[position]: 
            position = i  
            
    return   position

from math import inf
in_tree = [True, True, True, False, True]
distance = [inf, 0, inf, inf, inf]
print(next_vertex(in_tree, distance))